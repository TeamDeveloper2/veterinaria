<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\bitacora;
use App\Models\emergencia;
use App\Models\cliente;
use App\Models\mascota;
use App\models\User;
use App\Models\registromedico;
use App\Models\enfermedad;
use App\Models\tableta;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmergenciaController extends Controller
{

    public function index()
    {
        $emerVer['emerVer']=mascota::select('mascotas.nombre','emergencias.*','users.*')
        ->join('emergencias','emergencias.codmascotas','=','mascotas.codmascota')
        ->join('clientes','mascotas.codmascota_cliente','=','clientes.codCliente')
        ->join('users','clientes.codCliente','=','users.id')
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
            $n=user::all();                                 //pero no mascota
            return view('emergencia.clientNewmascota',compact('n'));
        }else{                                              //-->existen ambos sujetos
              $n=user::all();
              $m=mascota::all();
              return view('emergencia.agregar',compact('n','m'));
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
        $e=new emergencia();
        $ee = new enfermedad();
        $t=new tableta();
        //----------------------
        $c->name= $request->input('nombreclient');
        $c->apePaterno= $request->input('apepaterno');
        $c->apeMaterno= $request->input('apematerno');
        $c->Genero= $request->input('generoc');
        $c->fechNacimiento = $request->input('fechac');
        $c->email=$request->input('emailc') ; //datos genericos
        $c->Nacionalidad= 'bolivia';
        $c->save();
//----------------------------------------------------------------

        $c1->codCliente = $c->id;
        $c1->save();
        //----------------------
        $m->nombre = $request->input('nombrem');
        $m->raza = $request->input('razam');
        $m->genero = $request->input('generom');
        $m->fechaNacimiento = $request->input('fecha_nacimientom');
        $m->especie = $request->input('especiem');
        $m->peso = $request->input('pesom');
        $m->color = 'cafe';
        $m->codmascota_cliente= $c1->codCliente;
        $m->save();
        //----------------------
        $e->codmascotas=$m->codmascota;
        $e->envenenamiento=$request->input('env1');
        $e->fracturaHueso=$request->input('frac1');
        $e->enfermedad=$request->input('enf1');
        $e->tratamiento=$request->input('tra1');
        $e->parto=$request->input('par1');
        $e->fecha = Carbon::now();
        $e->save();
        //----------------------
        if ($e->enfermedad == 1 ) {
            $ee->nombreEnfermedad='ENFERMEDAD';
        }
        if ($e->fracturaHueso ==1){
            $ee->nombreEnfermedad='FRACTURAD';
        }
        if ($e->tratamiento==1) {
            $ee->nombreEnfermedad='TRATAMENTO';
        }
        if ($e->envenenamiento==1) {
            $ee->nombreEnfermedad='ENVENAMENTO';
        }
        if ($e->parto==1) {
            $ee->nombreEnfermedad='PARTO';
        }
            $ee->sintomas=$request->input('desc');
            $ee->fecha=Carbon::now();
            $ee->save();
        //----------------------
            $t->dosisporDia=0;
            $t->fecha=carbon::now();
            $t->nombreMedicamentos='';
            $t->precio=0;
            $t->save();
        //------------------
        $r->codeme = $e->codemergencia;
        $r->codmasc = $m->codmascota;
        $r->fecha = Carbon::now();
        $r->codtab = $t->codtableta;
        $r->codenferm = $ee->codenfermedad;
        $r->save();

        //------------------
        $bitacora = new bitacora();
        $bitacora->name = 'admin';
        $bitacora->causer_id = $c->id;
        $bitacora->long_name = 'emergencia';
        $bitacora->descripcion = 'crear Mascota y cliente';
        $bitacora->subject_id = $c->id;
        $bitacora->save();

        return redirect(route('index'));

    }

    public function store1(Request $request)
    {
        //
        $dato = user::find(auth()->id());
        $r=new registromedico();
        $m=new mascota();
        $e=new emergencia();
        $ee = new enfermedad();
        $t=new tableta();
        //----------------------------------------------------------------
        $m->nombre = $request->input('nombrem');
        $m->raza = $request->input('razam');
        $m->genero = $request->input('generom');
        $m->fechaNacimiento = $request->input('fecha_nacimientom');
        $m->especie = $request->input('especiem');
        $m->peso = $request->input('pesom');
        $m->color = 'cafe';
        $m->codmascota_cliente= $request->input('cliente');
        $m->save();
        //----------------------
        $e->codmascotas=$m->codmascota;
        $e->envenenamiento=$request->input('env1');
        $e->fracturaHueso=$request->input('frac1');
        $e->enfermedad=$request->input('enf1');
        $e->tratamiento=$request->input('tra1');
        $e->parto=$request->input('par1');
        $e->fecha = Carbon::now();
        $e->save();
        //----------------------
        if ($e->enfermedad == 1 ) {
            $ee->nombreEnfermedad='ENFERMEDAD';
        }
        if ($e->fracturaHueso ==1){
            $ee->nombreEnfermedad='FRACTURAD';
        }
        if ($e->tratamiento==1) {
            $ee->nombreEnfermedad='TRATAMENTO';
        }
        if ($e->envenenamiento==1) {
            $ee->nombreEnfermedad='ENVENAMENTO';
        }
        if ($e->parto==1) {
            $ee->nombreEnfermedad='PARTO';
        }
            $ee->sintomas=$request->input('desc');
            $ee->fecha=Carbon::now();
            $ee->save();
        //----------------------
            $t->dosisporDia=0;
            $t->fecha=carbon::now();
            $t->nombreMedicamentos='';
            $t->precio=0;
            $t->save();
        //------------------
        $r->codeme = $e->codemergencia;
        $r->codmasc = $m->codmascota;
        $r->fecha = Carbon::now();
        $r->codtab = $t->codtableta;
        $r->codenferm = $ee->codenfermedad;
        $r->save();
        //----------------------

$bitacora = new bitacora();
$bitacora->name = 'admin';
$bitacora->causer_id = $dato;
$bitacora->long_name = 'emergencia';
$bitacora->descripcion = 'crear Mascota y cliente';
$bitacora->subject_id = $request->input('cliente');
$bitacora->save();

        return redirect(route('index'));

    }

    public function store2(Request $request)
    {
        //

        $dato = user::find(auth()->id());
        $r=new registromedico();
        $e=new emergencia();
        $ee =new enfermedad();
        $t=new tableta();
        //---------------------

        $e->envenenamiento=$request->input('env1');
        $e->fracturaHueso=$request->input('frac1');
        $e->enfermedad=$request->input('enf1');
        $e->tratamiento=$request->input('tra1');
        $e->parto=$request->input('par1');
        $e->fecha = Carbon::now();
        $e->codmascotas=$request->input('id_mascota');
        $e->save();
        //----------------------
        if ($e->enfermedad == 1 ) {
            $ee->nombreEnfermedad='ENFERMEDAD,';
        }
        if ($e->fracturaHueso ==1){
            $ee->nombreEnfermedad='FRACTURAD,';
        }
        if ($e->tratamiento==1) {
            $ee->nombreEnfermedad='TRATAMENTO,';
        }
        if ($e->envenenamiento==1) {
            $ee->nombreEnfermedad='ENVENAMENTO,';
        }
        if ($e->parto==1) {
            $ee->nombreEnfermedad='PARTO,';
        }
            $ee->sintomas=$request->input('desc');
            $ee->fecha=Carbon::now();
            $ee->save();
        //----------------------
            $t->dosisporDia=0;
            $t->fecha=carbon::now();
            $t->nombreMedicamentos='';
            $t->precio=0;
            $t->save();
        //------------------
        $r->codeme = $e->codemergencia;
        $r->codmasc = $request->input('id_mascota');;
        $r->fecha = Carbon::now();
        $r->codtab = $t->codtableta;
        $r->codenferm = $ee->codenfermedad;
        $r->save();

        //----------------------

$bitacora = new bitacora();
$bitacora->name = 'admin';
$bitacora->causer_id = $dato;
$bitacora->long_name = 'emergencia';
$bitacora->descripcion = 'crear emergencia';
$bitacora->subject_id = $request->input('id');
$bitacora->save();
        return redirect(route('index'));
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
