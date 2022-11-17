<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Models\inventario;
use App\Models\User;
use Carbon\Carbon; ;
use Illuminate\Http\Request;
use Illiminate\Support\Facades\Storage;
use App\Http\Requests\PutRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage as FacadesStorage;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $inv = inventario::orderBy('codigoProducto', 'asc')->get();
        return view('articulos.index',compact('inv'));
        //return view('invitations.index', compact('inv'));
    }

    public function createArticulo(Request $request)
    {
        $r = $request->value1;
        if ($r==0 || $r==1){
            return view('articulos.agregar1');;
        }else{
            return view('articulos.agregar');
        }

        //return view('articulos.agregar');
        //return $r;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , PutRequest $putrequest)
    {
        $inv = new inventario();
        $inv->fecha_vencimiento=null;
        $inv->nombreItem=$request->input('nombre');
        $inv->codigoProducto=$request->input('nombrecod');
        $inv->cantidadActual=$request->input('cantidad');
        $inv->detalle=$request->input('detalle');
        $inv->precio=$request->input('precio');
        $inv->fecha=Carbon::now();
        $inv->cantidadAnterior=0 ;
        $inv->cantidadSalida=0;
        $inv->cantidadTotal=0;
        $dato = user::find(auth()->id());
        $d=$dato->id;
        $inv->codUser=$d;
        //$inv->img= $request->input('img');
        if($request->hasFile('images')){
            $file = $request->file('images');
            $d = 'img_DB/art/';
            $name = time() . '-' . $file[1]->getClientOriginalName();
            $up = $file[1]->move($d,$name);
            $inv->img = $d . $name;
        }
        $inv->save();
        return redirect(route('indexArt'));

    }

    public function store0(Request $request)
    {
        $inv = new inventario();
        $inv->fecha_vencimiento=$request->input('date');
        $inv->nombreItem=$request->input('nombre');
        $inv->codigoProducto=$request->input('nombrecod');
        $inv->cantidadActual=$request->input('cantidad');
        $inv->detalle=$request->input('detalle');
        $inv->precio=$request->input('precio');
        $inv->fecha=Carbon::now();
        $inv->cantidadAnterior=0 ;
        $inv->cantidadSalida=0;
        $inv->cantidadTotal=0;
        $dato = user::find(auth()->id());
        $d=$dato->id;
        $inv->codUser=$d;
        if($request->hasFile('images')){
            $file = $request->file('images');
            $d = 'img_DB/art/';
            $name = time() . '-' . $file[1]->getClientOriginalName();
            $up = $file[1]->move($d,$name);
            $inv->img = $d . $name;
        }
        $inv->save();
        return redirect(route('indexArt'));
    }

    public function show(inventario $inventario)
    {
        //
    }


    public function edit($inventario)
    {
        //
        $a = $inventario;
        $i=inventario::find($a);
        $ii=inventario::find($inventario);
        $e = $ii->cantidadActual;
        $i->cantidadAnterior=$e;
        $i->update();
        return view('articulos.modificar', compact('i'));
    }


    public function update(Request $request, inventario $inventario)
    {
        //
    }


    public function destroy(inventario $inventario)
    {
        //
    }
}
