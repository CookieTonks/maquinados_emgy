<?php

namespace App\Http\Controllers;

use App\Models;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class facturacion_controller extends Controller
{
    public function dashboard_facturacion()
    {
        $notificaciones =  Models\notifications::all();

        $ordenes = DB::table('orders')
            ->join('emgy_rutas', 'orders.id', '=', 'emgy_rutas.ot')
            ->where('emgy_rutas.sistema_calidad', '=', 'DONE')
            ->where('emgy_rutas.sistema_facturacion', '=', '-')
            ->select('orders.*')
            ->get();

        return view('modulos.facturacion.dashboard_facturacion', compact('ordenes', 'notificaciones'));
    }

    public function buscador_facturacion()
    {
        $ordenes = DB::table('orders')
            ->join('emgy_rutas', 'orders.id', '=', 'emgy_rutas.ot')
            ->where('emgy_rutas.sistema_calidad', '=', 'DONE')
            ->where('emgy_rutas.sistema_facturacion', '=', '-')
            ->select('orders.*')
            ->get();

        $notificaciones =  Models\notifications::all();


        return view('modulos.facturacion.buscador_facturacion', compact('ordenes', 'notificaciones'));
    }

    public function registro_factura(Request $request)
    {


        $date = Carbon::now();

        $registro_factura = models\orders::where('id', '=', $request->ot)->first();


        $salidas = models\salidas_embarques::where('ot', '=', $request->ot)
            ->where('tipo_salida', '=', 'Factura')
            ->orwhere('tipo_salida', '=', 'Remision')
            ->sum('cantidad');

        $salidas = (int)$salidas;
        $oc = (int)$registro_factura->cantidad;

        if ($salidas === $oc) {

            $registro_factura->factura = $request->factura;
            $registro_factura->fecha_entregada = $date;
            $registro_factura->save();

            $registro_emgy = new models\emgy_registros();
            $registro_emgy->ot = $request->ot;
            $registro_emgy->movimiento = 'FACTURACION - ENTREGA';
            $registro_emgy->responsable = Auth::user()->name;
            $registro_emgy->save();

            $ruta = models\emgy_rutas::where('ot', '=', $request->ot)->first();
            $ruta->sistema_facturacion = 'DONE';
            $ruta->save();
            return back()->with('mensaje-success', '¡Factura registrada con exito!');
        } else {
            return back()->with('mensaje-error', '¡La cantidad de las piezas entregadas no corresponde con la OC del cliente!');
        }
    }
}
