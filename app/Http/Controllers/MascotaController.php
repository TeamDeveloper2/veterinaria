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
        $d->nombre= $request->input('nombre');
        $d->raza=$request->input('raza');
        $d->color=$request->input('color');
        $d->genero=$request->input('genero');
        $d->especie=$request->input('especie');
        $d->fechaNacimiento=$request->input('fecha_nacimiento');
        $d->peso=$request->input('peso');
        $d->codmascota_cliente=$request->input('empleado');
        $d->save();


        $bitacora = new bitacora();
        $bitacora->name = 'admin';
        $bitacora->causer_id = '1';
        $bitacora->long_name = 'mascota';
        $bitacora->descripcion = 'crear';
        $bitacora->subject_id = '5';
        $bitacora->ip=$request->ip();
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
        $m->nombre = $request->input('nombres');
        $m->raza = $request->input('raza');
        $m->color = $request->input('color');
        $m->genero = $request->input('genero');
        $m->especie = $request->input('especie');
        $m->fechaNacimiento = $request->input('fecha_nacimiento');
        $m->peso = $request->input('peso');

        $bitacora = new bitacora();
        $bitacora->name = 'admin';
        $bitacora->causer_id = '1';
        $bitacora->long_name = 'mascota';
        $bitacora->descripcion = 'editar';
        $bitacora->subject_id = '5';
        $bitacora->ip=$request->ip();
        $bitacora->save();
        
        $m->update();



        return redirect()->route('homem');


    }


    public function destroy(mascota $mascota)
    {
        //
    }
}
