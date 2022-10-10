<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Post;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;
use App\Models\mascota;
use App\Models\User;
use App\Models\cliente;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a['m'] = mascota::all();
        return view ('mascota.index',$a );
    }

    public function mostrar($codmascota){
        $a = mascota::find($codmascota);
        $b= user::select('users.name','users.apePaterno','users.apeMaterno')
        ->join('clientes','users.id','=','clientes.codCliente')
        ->join('mascotas','clientes.codCliente','=','mascotas.codCliente1')
        ->first();
        return view ('mascota.mostrar',compact('a','b'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $n = user::join('clientes','users.id','=','clientes.codCliente')
        ->get();
        return view ('mascota.agregar',compact('n'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $d=new mascota();
        $d->nombre= $request->input('nombre');
        $d->raza=$request->input('raza');
        $d->color=$request->input('color');
        $d->genero=$request->input('genero');
        $d->especie=$request->input('especie');
        $d->fechaNacimiento=$request->input('fecha_nacimiento');
        $d->peso=$request->input('peso');
        $d->codCliente1=$request->input('empleado');
        $d->save();
        return redirect(route('homem'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show(mascota $mascota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function edit($mascota)
    {
        //
        $cod = mascota::find($mascota);
        return view('mascota.modificar',compact('cod'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$mascota)
    {
        $m = mascota::find($mascota);
        $m->nombre = $request->input('nombres');
        $m->raza = $request->input('raza');
        $m->color = $request->input('color');
        $m->genero = $request->input('genero');
        $m->especie = $request->input('especie');
        $m->fechaNacimiento = $request->input('fecha_nacimiento');
        $m->peso = $request->input('peso');
        $m->update();
        return redirect()->route('homem');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy(mascota $mascota)
    {
        //
    }
}
