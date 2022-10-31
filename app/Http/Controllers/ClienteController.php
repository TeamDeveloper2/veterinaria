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
        $c->name=$request->('nombres');
        $c->apePaterno=$request->('pat');
        $c->apeMaterno=$request->('mat');
        $c->fechNacimiento=$request->('nac');
        $c->Genero=$request->('gen');
        $c->Nacionalidad=$request->('nacional');
        $c->email=$request->('correo');
        $c->save();

        $cc->id=$c->id;
        $cc->save();

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
        $m->name = $request->('nombres');
        $m->fechNacimiento = $request->('fecha');
        $m->Nacionalidad = $request->('nacional');
        $m->email = $request->('correo');

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
