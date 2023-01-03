<?php

namespace App\Http\Controllers;

use App\Models\cita;
use App\Models\cliente;
use App\Models\inventario;
use App\Models\User;
use Illuminate\Http\Request;

class ReportesController extends Controller
{
    public function menu()
    {
        return view('reportes.menu');
    }


    public function ventas()
    {
        $ventas=[];
        return view('reportes.ventas',compact('ventas'));
    }

    public function productos()
    {
        $productos=inventario::all();
        return view('reportes.productos',compact('productos'));
    }

    public function clientes()
    {
        $clientes=User::where('type',2)->get();
        return view('reportes.clientes',compact('clientes'));
    }

    
    public function citas()
    {
        $citas=cita::all();
        return view('reportes.citas',compact('citas'));
    }
}
