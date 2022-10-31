<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Post;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\Models\cliente;
use App\Models\User;
use App\Models\bitacora;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index()
    {
        $c['cc'] = user::all();
        return view('cliente.index',$c);
    }

    public function mostrar($id){
        $c = user::find($id);
        return view('cliente.mostrar',compact('c'));

    }

    public function create()
    {
        //
        return view('cliente.agregar');
    }


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

        $bitacora = new bitacora();
        $bitacora->name = 'admin';
        $bitacora->causer_id = $c->id;
        $bitacora->long_name = 'cliente';
        $bitacora->descripcion = 'crear';
        $bitacora->subject_id = $c->id;
        $bitacora->save();

        return redirect(route('homec'));

    }

    public function show(cliente $cliente)
    {
        //
    }

    public function edit($cliente)
    {
        $c=user::find($cliente);
        return view('cliente.modificar',compact('c'));
    }

    public function update(Request $request,$cliente)
    {
        //
        $m = user::find($cliente);
        $m->name = $request->input('nombres');
        $m->fechNacimiento = $request->input('fecha');
        $m->Nacionalidad = $request->input('nacional');
        $m->email = $request->input('correo');

        $bitacora = new bitacora();
        $bitacora->name = 'admin';
        $bitacora->causer_id = $m->id;
        $bitacora->long_name = 'cliente';
        $bitacora->descripcion = 'editar';
        $bitacora->subject_id = $m->id;
        $bitacora->save();

        $m->update();
        return redirect()->route('homec');

    }

    public function destroy(cliente $cliente)
    {
        //
    }
}
