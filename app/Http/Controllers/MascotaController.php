<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Post;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;
use App\Models\bitacora;
use App\Models\mascota;
use App\Models\registromedico;
use App\Models\User;
use App\Models\cliente;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    public function index()
    {
        $a['m'] = mascota::all();
        return view ('mascota.index',$a );
    }

    public function mostrar($codmascota){
        $a = mascota::find($codmascota);
        $b= user::select('users.name','users.apePaterno','users.apeMaterno')
        ->join('clientes','users.id','=','clientes.codCliente')
        ->join('mascotas','clientes.codCliente','=','mascotas.codmascota_cliente')
        ->first();
        return view ('mascota.mostrar',compact('a','b'));
    }

    public function create()
    {
        $n = user::all();
        return view ('mascota.agregar',compact('n'));
    }

    public function store(Request $request)
    {
        $d=new mascota();
        $d->nombre= $request->('nombre');
        $d->raza=$request->('raza');
        $d->color=$request->('color');
        $d->genero=$request->('genero');
        $d->especie=$request->('especie');
        $d->fechaNacimiento=$request->('fecha_nacimiento');
        $d->peso=$request->('peso');
        $d->codmascota_cliente=$request->('empleado');
        $d->save();

        $r = new registromedico();
        $r->codmasc=$d->codmascota;
        $r->save();

        $bitacora = new bitacora();
        $bitacora->name = 'admin';
        $bitacora->causer_id = $d->codmascota_cliente;
        $bitacora->long_name = 'mascota';
        $bitacora->descripcion = 'crear';
        $bitacora->subject_id = $d->codmascota_cliente;
        $bitacora->save();

        return redirect(route('homem'));
    }

    public function edit($mascota)
    {
        //
        $cod = mascota::find($mascota);
        return view('mascota.modificar',compact('cod'));
    }


    public function update(Request $request,$mascota)
    {
        $m = mascota::find($mascota);
        $m->nombre = $request->('nombres');
        $m->raza = $request->('raza');
        $m->color = $request->('color');
        $m->genero = $request->('genero');
        $m->especie = $request->('especie');
        $m->fechaNacimiento = $request->('fecha_nacimiento');
        $m->peso = $request->('peso');
        $m->update();

        $bitacora = new bitacora();
        $bitacora->name = 'admin';
        $bitacora->causer_id = $m->codmascota_cliente;
        $bitacora->long_name = 'mascota';
        $bitacora->descripcion = 'editar';
        $bitacora->subject_id = $m->codmascota_cliente;
        $bitacora->save();

        return redirect()->route('homem');


    }


    public function destroy(mascota $mascota)
    {
        //
    }
}
