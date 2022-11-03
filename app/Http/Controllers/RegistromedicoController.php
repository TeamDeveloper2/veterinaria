<?php

namespace App\Http\Controllers;

use App\Models\bitacora;
use App\Models\registromedico;
use Illuminate\Http\Request;
use App\Models\emergencia;
use App\Models\mascota;
use App\Models\enfermedad;
use App\Models\User;
use App\Models\cliente;
use App\Models\tableta;
use Carbon\Carbon;

class RegistromedicoController extends Controller
{
    public function index()
    {
        $registro['r'] = registromedico::select('mascotas.nombre','users.name','mascotas.color',
        'mascotas.especie','mascotas.raza','mascotas.fechaNacimiento','mascotas.genero',
        'mascotas.peso','mascotas.codmascota')
        ->join('mascotas','registromedicos.codmasc','=','mascotas.codmascota')
        ->join('clientes','mascotas.codmascota_cliente','=','clientes.codCliente')
        ->join('users','clientes.codCliente','=','users.id')
        ->get();
        //return $registro;
        $r1=registromedico::count();
        return view('historico medico.index',$registro,compact('r1'));
    }
    public function create()
    {
        $m1=mascota::select('mascotas.*')
        ->join('registromedicos','mascotas.codmascota','!=','registromedicos.codmasc')->get();
        return view('historico medico.agregar',compact('m1'));
    }

    public function store(Request $request)
    {
        //
        $r= new registromedico();
        $e = new emergencia();
        $ee=new enfermedad();
        $t = new tableta();
        $ee->nombreEnfermedad = $request->input('enfer');
        $ee->sintomas = $request->input('sinto');
        $ee->fecha = Carbon::now();
        $ee->save();
        //----------------------
        $t->nombreMedicamentos=$request->input('medi');
        $t->dosisporDia=$request->input('dos');
        $t->precio=$request->input('precio');
        $t->fecha = Carbon::now();
        $t->save();
        //----------------------
        $e->envenenamiento=0;
        $e->fracturaHueso=0;
        $e->enfermedad=1;
        $e->tratamiento=0;
        $e->parto=0;
        $e->codmascotas=$request->input('codmascota');
        $e->fecha=carbon::now();
        $e->save();
        //return
        $r->codmasc= $request->input('codmascota');
        $r->codenferm = $ee->codenfermedad;
        $r->codtab=$t->codtableta;
        $r->codeme=$e->codemergencia;
        $r->fecha = Carbon::now();
        $r->save();

        $bitacora = new bitacora();
        $bitacora->name = 'admin';
        $bitacora->causer_id = '1';
        $bitacora->long_name = 'registro';
        $bitacora->descripcion = 'crear regist';
        $bitacora->subject_id = '3';
        $bitacora->ip=$request->ip();
        $bitacora->save();

        return redirect(route('indexr'));
    }

    public function show($codmascota)
    {
        //
        $mascota = mascota::find($codmascota);
        $r['r'] = registromedico::select('users.name','mascotas.*','emergencias.*',
        'enfermedads.*','tabletas.*')
        ->where('registromedicos.codmasc','=',$mascota->codmascota)
       ->join('mascotas','registromedicos.codmasc','=','mascotas.codmascota')
       ->join('enfermedads','registromedicos.codenferm', '=','enfermedads.codenfermedad')
       ->join('tabletas','registromedicos.codtab','=','tabletas.codtableta')
       ->join('emergencias','registromedicos.codeme','=','emergencias.codemergencia')
       ->join('users','mascotas.codmascota_cliente', '=', 'users.id')
       ->get()->find(0);

       $r1['r1'] = registromedico::select('users.name','mascotas.*','emergencias.*',
       'enfermedads.*','tabletas.*')
       ->where('registromedicos.codmasc','=',$mascota->codmascota)
      ->join('mascotas','registromedicos.codmasc','=','mascotas.codmascota')
      ->join('enfermedads','registromedicos.codenferm','=','enfermedads.codenfermedad')
      ->join('tabletas','registromedicos.codtab','=','tabletas.codtableta')
      ->join('emergencias','registromedicos.codeme','=','emergencias.codemergencia')
      ->join('users','mascotas.codmascota_cliente', '=','users.id')
      ->get();

        //return $r;$r1;$r3;
        return view('historico medico.mostrar',$r,$r1);
    }

    public function edit(registromedico $registromedico)
    {
        //
    }

    public function update(Request $request, registromedico $registromedico)
    {
        //
    }

    public function destroy(registromedico $registromedico)
    {
        //
    }
}
