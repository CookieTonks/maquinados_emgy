<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Events\ModelsPruned;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\dibujos_exports;
use App\Exports\ordenes_exports;
use finfo;
use App\Models;


class ingenieria_controller extends Controller
{
    public function dashboard_ingenieria()

    {
        $notificaciones =  Models\notifications::all();

        $dibujos = Models\dibujos::where('estatus', '=', 'Pendiente')->get();

        return view('modulos.ingenieria.dashboard_ingenieria', compact('dibujos', 'notificaciones'));
    }
    public function buscador_ingenieria()

    {

        if(Auth::user()->role == "Administrador")
        {
            $dibujos = Models\dibujos::all();
        }
        else
        {
            $dibujos = Models\dibujos::join('orders', 'orders.id', '=', 'dibujos.ot')
            ->where('orders.vendedor', '=',  Auth::user()->name)
            ->get();
        }

        
        $notificaciones =  Models\notifications::all();


        return view('modulos.ingenieria.buscador_ingenieria', compact('dibujos', 'notificaciones'));
    }

    public function carga_dibujo(Request $request)
    {

        Storage::disk('public')->putFileAs('dibujos/' . $request->ot, $request->file('dibujo'), $request->ot . '.pdf');

        $alta_dibujo = Models\dibujos::where('ot', '=', $request->ot)->first();
        $alta_dibujo->estatus = 'Cargada';
        $alta_dibujo->save();

        $ruta = models\emgy_rutas::where('ot', '=', $alta_dibujo->ot)->first();
        $ruta->sistema_ingenieria = 'DONE';
        $ruta->save();

        $registro_emgy = new models\emgy_registros();
        $registro_emgy->ot = $request->ot;
        $registro_emgy->movimiento = 'DIBUJO - INGENIERIA';
        $registro_emgy->responsable = Auth::user()->name;
        $registro_emgy->save();

        return back()->with('mensaje-success', '¡Dibujo cargado con éxito!');
    }

    public function dibujos_exports()
    {
        return Excel::download(new dibujos_exports, 'dibujos.xlsx');
    }
}
