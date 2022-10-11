<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Post;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\Models\cliente;
use App\Models\User;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $c['cc'] = user::all();
        return view('cliente.index',$c);
    }

    public function mostrar($id){
        $c = user::find($id);
        return view('cliente.mostrar',compact('c'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cliente.agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $c=new User();
        $cc=new cliente();
        $c->name=$request->input('nombres');
        $c->apePaterno=$request->input('pat');
        $c->apeMaterno=$request->input('mat');
        $c->fechNacimiento=$request->input('nac');
        $c->Genero=$request->input('gen');
        $c->Nacionalidad=$request->input('nacional');
        $c->email=$request->input('correo');
        $c->save();
        return redirect(route('homec'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($cliente)
    {
        $c=user::find($cliente);
        return view('cliente.modificar',compact('c'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$cliente)
    {
        //
        $m = user::find($cliente);
        $m->name = $request->input('nombres');
        $m->fechNacimiento = $request->input('fecha');
        $m->Nacionalidad = $request->input('nacional');
        $m->email = $request->input('correo');

        $m->update();
        return redirect()->route('homec');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(cliente $cliente)
    {
        //
    }
}
