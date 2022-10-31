<?php

namespace App\Http\Controllers;

use App\Models\emergencia;
use App\Models\cliente;
use App\Models\mascota;
use App\models\User;
use App\Models\registromedico;

use Illuminate\Http\Request;

class EmergenciaController extends Controller
{

    public function index()
    {
        $emerVer=mascota::select('mascotas.nombre','emergencia.date','emergencia.envenenamiento',
        'emergencia.parto','emergencia.fracturaHueso','emergencia.enfermedad','emergencia.tratamiento')
        ->join('emergencias','codmascota','=','codmascotas')
        ->get();
    }

    public function pregunta(Request $request){
        $valor1=$request->value1;
        $valor2=$request->value2;
        if(($valor1==0)and($valor2==0)){                    //-->caso donde el cliente y mascota no exista
            return view('newClientMascota');                //crear un cliente y una mascota nuevo
        }elseif(($valor1==1)and($valor2==0)){               //-->caso donde el cliente si exista
            $c=user::all();                                 //pero no mascota
            return view('registrar_masc',compact('c'));
        }else{                                              //-->existen ambos sujetos
            $c1=user::all();
            $m=mascota::all();
            return view('crearEmerg',compact('c1,m'));
        }

    }   //en un caso no se tomo que el animal exista ya en la BD pero no el cliente;

    public function create()
    {
       return view('cuestion');
    }


    public function store0(Request $request)
    {
        //
        $r=new registromedico();
    }

    public function store1(Request $request)
    {
        //
        $r=new registromedico();
    }

    public function store2(Request $request)
    {
        //
        $r=new registromedico();
    }

    public function show(emergencia $emergencia)
    {
        //
    }

    public function edit(emergencia $emergencia)
    {
        //
    }


    public function update(Request $request, emergencia $emergencia)
    {
        //
    }


    public function destroy(emergencia $emergencia)
    {
        //
    }
}
