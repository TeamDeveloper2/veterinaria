<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class ReporteClienteController extends Controller
{
    public function index()
    {
        $c['cc'] = user::all(); 
        return view('ClienteReportes.index',$c);
    }
    public function pdf1()
    {
        $nombre= "reporte de cita completo";
        $contador = 1 ;
        $getdatoslista = $this->listacita(); 
       //obtiene todos los registros del modelo
    
    $pdf=PDF::loadView('CitaReportes.pdf1',['getdatoslista'=>$getdatoslista],['contador'=>$contador])->setPaper('a4');
  
    return $pdf->stream(); 
        //descarga
    //    return $pdf->download('_Inventario.pdf');
    }

}
