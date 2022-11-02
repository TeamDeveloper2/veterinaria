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
        $emerVer=mascota::select('mascotas.nombre','emergencias.fecha','emergencias.envenenamiento',
        'emergencias.parto','emergencias.fracturaHueso','emergencias.enfermedad','emergencias.tratamiento')
        ->join('emergencias','codmascotas','=','codmascota')
        ->get();
        //$emer=emergencia::all();
        return view('emergencia.index', $emerVer);
    }

    public function p(){
        return view('emergencia.preg');
    }

    public function pregunta(Request $request){
        $valor1=$request->value1;
        $valor2=$request->value2;
        //$valor3 = $valor1+$valor2;
        //return $valor3;
        if(($valor1==0)and($valor2==0)){                    //-->caso donde el cliente y mascota no exista
            return view('emergencia.newClientMascota');                //crear un cliente y una mascota nuevo
        }elseif(($valor1==1)and($valor2==0)){               //-->caso donde el cliente si exista
            $c=user::all();                                 //pero no mascota
            return view('registrar_masc',compact('c'));
        }else{                                              //-->existen ambos sujetos
               $c1=user::all();
               $m=mascota::all();
              return view('crearEmerg',compact('c1,m'));
        }
    }//en un caso no se tomo que el animal exista ya en la BD pero no el cliente;

    public function create()
    {
       return view('cuestion');
    }


    public function store0(Request $request)
    {
        //
        $c= new User();
        $c1=new cliente();
        $m= new mascota();
        $r=new registromedico();
        $c->name= $request->input('nombreclient');
        $c->apePaterno= $request->input('apepaterno');
        $c->apeMaterno= $request->input('apematerno');
        $c->genero= $request->input('generoc');
        $c->name= $request->input('fechac');
        $c->name ; //datos genericos
        $c->name ;

        $c->save();
        $c1->codcliente = $c->id;
        $c1->save();

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
