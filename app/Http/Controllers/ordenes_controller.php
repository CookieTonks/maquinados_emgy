<?php

namespace App\Http\Controllers;

use App\Exports\ordenes_exports;
use Illuminate\Database\Events\ModelsPruned;
use Illuminate\Http\Request;
use App\Models;
use App\Models\materiales;
use App\Models\Events;
use App\Models\orders;
use PDF;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Storage;
use finfo;
use App\Exports\UsersExport;
use App\Models\Cliente;
use App\Models\Empresas;
use App\Models\usuarios;
use Maatwebsite\Excel\Facades\Excel;


class ordenes_controller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard_ordenes()
    {


        // $usuarios = Cliente::with('empresa', 'usuarios')->get();
        // dd($usuarios);


        $notificaciones =  Models\notifications::all();
        $orders = Models\orders::all();
        $clientes = models\cliente::orderBy('cliente', 'ASC')->get();
        $usuarios =  models\usuarios::orderBy('cliente', 'ASC')->get();
        $vendedores = models\user::where('email', 'like', '%ventas%')->get();

        return view('modulos.ordenes_trabajo.dashboard', compact('notificaciones', 'vendedores', 'usuarios', 'orders', 'clientes'));
    }

    public function buscador_ordenes()
    {



        if (Auth::user()->role == "Administrador") {
            $orders = Models\orders::all();
        } else {
            $orders = Models\orders::where('vendedor', '=', Auth::user()->name)->get();
        }
        $notificaciones =  Models\notifications::all();


        return view('modulos.ordenes_trabajo.buscador_ordenes', compact('orders', 'notificaciones'));
    }
    public function dashboard_ordenes_register(Request $request)
    {


        $alta_orden = new Models\orders;
        $alta_orden->empresa = $request->empresa;
        $alta_orden->cliente = $request->cliente;
        $alta_orden->usuario = $request->usuario;
        $alta_orden->oc = $request->oc;
        $alta_orden->partida = $request->partida;
        $alta_orden->cantidad = $request->cantidad;
        $alta_orden->descripcion = $request->descripcion;
        $alta_orden->moneda = $request->moneda;
        $alta_orden->monto = $request->monto;
        $alta_orden->vendedor = $request->vendedor;
        $alta_orden->tipo_dibujo = $request->tipo_dibujo;
        $alta_orden->comentario_diseno = $request->comentario_diseno;
        $alta_orden->salida_produccion = $request->salida_produccion;
        $alta_orden->salida_cliente = $request->salida_cliente;
        $alta_orden->prioridad = $request->prioridad;
        $alta_orden->estatus = "Iniciada";
        $alta_orden->tratamiento = $request->tratamiento;
        $alta_orden->progreso = 0;
        $alta_orden->procesos = implode(", ", $request->Proceso);
        $alta_orden->tipo_material = $request->tipo_material;
        $alta_orden->tipo_entrega_factura = $request->tipo_entrega_factura;
        $alta_orden->tipo_entrega_remision = $request->tipo_entrega_remision;


        $array_hora = $request->hora;
        $array_minutos = $request->minutos;
        $alta_orden->save();

        if ($request->hasFile('archivo')) {
            Storage::disk('public')->putFileAs('oc/' . $alta_orden->id, $request->file('archivo'), $alta_orden->id . '.pdf');
        }



        $array_proceso = $request->Proceso;
        $arrlength = count($array_proceso);

        $minutos_ot = 0;
        $suma_procesos = 0;

        for ($i = 0; $i < $arrlength; $i++) {
            $horas = intval($array_hora[$i]);
            $hora = 60;
            $minutos = intval($array_minutos[$i]);
            $cantidad = intval($request->cantidad);



            $hora_minutos  =  $horas * $hora;
            $minutos_sumados = $hora_minutos + $minutos;
            $minutos_totales =  $minutos_sumados * $cantidad;


            $alta_proceso = new Models\process;
            $alta_proceso->ot = $alta_orden->id;
            $alta_proceso->proceso =  $array_proceso[$i];
            $alta_proceso->minutos = $minutos_totales;
            $alta_proceso->save();



            $minutos_ot = $minutos_ot + $minutos_totales;

            $minutos_totales = 0;

            $suma_procesos = $suma_procesos + 1;
        }


        if ($alta_orden->tipo_dibujo == "Ingenieria") {
            $alta_dibujo = new Models\dibujos;
            $alta_dibujo->ot = $alta_orden->id;
            $alta_dibujo->descripcion = $alta_orden->descripcion;
            $alta_dibujo->cliente = $alta_orden->cliente;
            $alta_dibujo->estatus = 'Pendiente';
            $alta_dibujo->save();
        }

        $alta_ruta = new models\emgy_rutas();
        $alta_ruta->ot = $alta_orden->id;
        $alta_ruta->sistema_ot = '-';
        $alta_ruta->sistema_ingenieria = '-';
        $alta_ruta->sistema_almacen = '-';
        $alta_ruta->sistema_almacenr = '-';
        $alta_ruta->sistema_compras = '-';
        $alta_ruta->sistema_produccion = '-';
        $alta_ruta->sistema_calidad = '-';
        $alta_ruta->sistema_embarques = '-';
        $alta_ruta->sistema_facturacion = '-';
        $alta_ruta->save();


        $alta_produccion = new models\production();
        $alta_produccion->ot = $alta_orden->id;
        $alta_produccion->cliente = $alta_orden->cliente;
        $alta_produccion->descripcion = $alta_orden->descripcion;
        $alta_produccion->maquina_asignada = '-';
        $alta_produccion->tiempo_asignado = $minutos_ot;
        $alta_produccion->persona_asignada = '-';
        $alta_produccion->estatus = 'REGISTRADA';
        $alta_produccion->pp = $suma_procesos;
        $alta_produccion->pr = 0;
        $alta_produccion->prioridad = $alta_orden->prioridad;
        $alta_produccion->fecha_production = $alta_orden->salida_produccion;
        $alta_produccion->fecha_cliente = $alta_orden->salida_cliente;
        $alta_produccion->fecha_recepcion = '-';
        $alta_produccion->save();


        $alta_evento = new models\Events();
        $alta_evento->title = "EC: " . $alta_orden->id;
        $alta_evento->start = $alta_orden->salida_cliente;
        $alta_evento->end = $alta_orden->salida_cliente;
        $alta_evento->save();

        $alta_evento = new models\Events();
        $alta_evento->title = "SP: " . $alta_orden->id;
        $alta_evento->start = $alta_orden->salida_produccion;
        $alta_evento->end = $alta_orden->salida_produccion;
        $alta_evento->save();


        $ruta = models\emgy_rutas::where('ot', '=', $alta_orden->id)->first();
        $ruta->sistema_ot = 'DONE';
        $ruta->save();


        $registro_emgy = new models\emgy_registros();
        $registro_emgy->ot = $alta_orden->id;
        $registro_emgy->movimiento = 'INICIO - OT';
        $registro_emgy->responsable = Auth::user()->name;
        $registro_emgy->save();

        if ($alta_orden->prioridad == 'Urgente') {
            $registro_notificacion = new models\notifications();
            $registro_notificacion->ot = $alta_orden->id;
            $registro_notificacion->cliente = $alta_orden->cliente;
            $registro_notificacion->estatus = 'Urgente';
            $registro_notificacion->save();
        }

        $mailData = [
            'title' => 'Notificación del sistema',
            'body' => ''
        ];


        if ($alta_orden->tipo_dibujo == 'Cliente') {
            Storage::disk('public')->putFileAs('dibujos/' . $alta_orden->id, $request->file('dibujo'), $alta_orden->id . '.pdf');

            $alta_ruta = models\emgy_rutas::where('ot', '=', $alta_orden->id)->first();
            $alta_ruta->sistema_ingenieria = 'DONE';
            $alta_ruta->save();
        }

        if ($alta_orden->tipo_material == 'Cliente') {

            $registro_emgy = new models\emgy_registros();
            $registro_emgy->ot = $alta_orden->id;
            $registro_emgy->movimiento = 'VENDEDOR - PRODUCCION';
            $registro_emgy->responsable = Auth::user()->name;
            $registro_emgy->save();

            $ruta = models\emgy_rutas::where('ot', '=', $alta_orden->id)->first();
            $ruta->sistema_almacenr = 'DONE';
            $ruta->sistema_compras = 'DONE';
            $ruta->sistema_almacen = 'DONE';
            $ruta->save();


            $produccion = models\production::where('ot', '=', $alta_orden->id)->first();

            $produccion->estatus = "L.PRODUCCION";
            $produccion->save();
        }


        if ($alta_orden->prioridad == 'Urgente') {
            $orden = models\orders::where('id', '=', $alta_orden->id)->first();

            // Mail::to('faciljets@gmail.com')->send(new DemoMail($mailData, $orden));
            // Mail::to('progjets01@gmail.com')->send(new DemoMail($mailData, $orden));
            //  Mail::to('almacenjets@gmail.com')->send(new DemoMail($mailData, $orden));
            //   Mail::to('calidadjets@gmail.com')->send(new DemoMail($mailData, $orden));
            //   Mail::to('miriamdominguez.e@gmail.com')->send(new DemoMail($mailData, $orden));

        }








        return back()->with('mensaje-success', '¡Orden de trabajo realizada con exito!');
    }

    public function order_pdf($id)
    {
        $order = Models\orders::findOrFail($id);
        $procesos = Models\process::where('ot', '=', $id)->get();


        $pdf = PDF::loadView('modulos.ordenes_trabajo.order_pdf', compact('order', 'procesos'));
        return $pdf->stream($id . '.pdf');
    }

    public function edition_order($id)
    {
        $notificaciones =  Models\notifications::all();

        $clientes = models\cliente::all();
        $usuarios =  models\usuarios::all();
        $vendedores =  models\user::where('role', '=', 'Vendedor')->get();


        $order = Models\orders::findOrFail($id);
        $procesos = Models\process::where('ot', '=', $id)->get();

        return view('modulos.ordenes_trabajo.edition_order', compact('notificaciones', 'order', 'clientes', 'usuarios', 'vendedores', 'procesos',));
    }

    public function edicion_order(Request $request, $id)
    {

        $order = models\orders::where('id', '=', $id)->first();
        $order->cliente = $request->cliente;
        $order->usuario = $request->usuario;
        $order->oc = $request->oc;
        $order->partida = $request->partida;
        $order->cantidad = $request->cantidad;
        $order->descripcion = $request->descripcion;
        $order->tratamiento = $request->tratamiento;
        $order->monto = $request->monto;
        $order->moneda = $request->moneda;
        $order->vendedor = $request->vendedor;
        $order->tipo_dibujo = $request->tipo_dibujo;
        if ($order->tipo_dibujo  == 'Ingenieria') {
            $dibujo = models\dibujos::where('ot', '=', $id)->exists();
            if ($dibujo === 'false') {
                $alta_dibujo = new Models\dibujos;
                $alta_dibujo->ot = $id;
                $alta_dibujo->descripcion = $request->descripcion;
                $alta_dibujo->cliente = $request->cliente;
                $alta_dibujo->estatus = 'Pendiente';
                $alta_dibujo->save();
            } else {
                $dibujo_ingenieria = models\dibujos::where('ot', '=', $id)->first();
                $dibujo_ingenieria->cliente = $request->cliente;
                $dibujo_ingenieria->descripcion = $request->descripcion;
                $dibujo_ingenieria->save();
            }
        }
        $order->comentario_diseno = $request->comentario_diseno;
        $order->salida_produccion = $request->salida_produccion;
        $order->salida_cliente = $request->salida_cliente;
        $order->prioridad = $request->prioridad;
        $order->tipo_material = $request->tipo_material;
        $order->save();





        $production = models\production::where('ot', '=', $id)->first();
        $production->cliente = $request->cliente;
        $production->descripcion = $request->descripcion;
        $production->fecha_cliente = $request->salida_cliente;
        $production->fecha_production = $request->salida_produccion;
        $production->prioridad = $request->prioridad;
        $production->save();

        $evento_cliente = models\Events::where('title', '=', 'EC: ' . $id)->delete();
        $evento_produccion = models\Events::where('title', '=', 'SP: ' . $id)->delete();


        $alta_evento = new models\Events();
        $alta_evento->title = "EC: " . $id;
        $alta_evento->start = $request->salida_cliente;
        $alta_evento->end = $request->salida_cliente;
        $alta_evento->save();

        $alta_evento = new models\Events();
        $alta_evento->title = "SP: " . $id;
        $alta_evento->start = $request->salida_produccion;
        $alta_evento->end = $request->salida_produccion;
        $alta_evento->save();


        $registro_emgy = new models\emgy_registros();
        $registro_emgy->ot = $request->ot;
        $registro_emgy->movimiento = 'MODIFICACION - OT';
        $registro_emgy->responsable = Auth::user()->name;
        $registro_emgy->save();

        return back()->with('mensaje-success', '¡Modificacion orden de trabajo realizada con exito!');
    }

    public function material_order($id)
    {
        $ot = $id;
        $notificaciones =  Models\notifications::all();

        $materiales = Models\materiales::where('ot', '=', $id)->get();
        return view('modulos.ordenes_trabajo.material_order', compact('notificaciones', 'materiales', 'ot'));
    }

    public function material_register(Request $request)
    {

        $empresa = models\orders::where('id', '=', $request->ot)->first();

        $alta_material = new Models\materiales();
        $alta_material->ot = $request->ot;
        $alta_material->empresa = $empresa->empresa;
        $alta_material->material = $request->material;
        $alta_material->tipo_material    = $request->tipo_material;
        $alta_material->cantidad_solicitada = $request->cantidad;
        $alta_material->c1 = $request->caracteristica1;
        $alta_material->c2 = $request->caracteristica2;
        $alta_material->c3 = $request->caracteristica3;
        $alta_material->descripcion = $request->descripcion;
        $alta_material->um = $request->medidas;
        $alta_material->tipo = 'MATERIAL';
        $alta_material->estatus = 'P/ALMACEN';
        $alta_material->save();


        return back()->with('mensaje-success', '¡Alta de material realizada con exito!');
    }

    public function material_delete($id)
    {

        $materiales = materiales::where('id', $id)->delete();
        return back()->with('mensaje-success', '¡Baja de material realizada con exito!');
    }

    public function ruta_ot($id)
    {
        $notificaciones =  Models\notifications::all();

        $ordenes = models\emgy_rutas::where('ot', '=', $id)->get();
        $produccion = models\production::where('ot', '=', $id)->first();
        $registros = models\emgy_registros::where('ot', '=', $id)->get();
        return view('modulos.ordenes_trabajo.ruta_ot', compact('notificaciones', 'ordenes', 'registros', 'produccion'));
    }

    public function ordenes_exports()
    {
        return Excel::download(new ordenes_exports, 'ordenes.xlsx');
    }
}
