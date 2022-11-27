<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Models\inventario;
use App\Models\proveedor;
use App\Models\User;
use Carbon\Carbon; ;
use PDF;
use Illuminate\Http\Request;
use Illiminate\Support\Facades\Storage;
use App\Http\Requests\PutRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
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
        $p = proveedor::all();
        $r = $request->value1;
        if ($r==0 || $r==1){
            return view('articulos.agregar1',compact('p'));;
        }else{
            return view('articulos.agregar' ,compact('p'));
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
        $inv->codProvedor=$request->input('prov');
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

    public function show($inventario)
    {
        //
        $inventario;
        $inv = inventario::find($inventario);
        return View('articulos.mostrar',compact('inv'));
        //return $inventario;
    }


    public function edit($inventario)
    {
        //
        $a = $inventario;
        $i=inventario::find($a);
        $b=$i->codProvedor;
        $iii=proveedor::find($b);
        //$ii=inventario::find($inventario);
        //$e = $ii->cantidadActual;
        //$i->cantidadAnterior=$e;
        //$i->update();
        return view('articulos.modificar', compact('i','iii'));
    }


    public function update(Request $request,  $inventario)
    {

        $art1 = inventario::find($inventario);
        $art2 = inventario::find($inventario);
        $a=$art2->cantidadActual;
        $art1->cantidadAnterior = $a;
        $art1->cantidadActual = $request->input('cantidad');
        $art1->fecha= Carbon::now();
        $art1->update();
        return redirect()->route('indexArt');
    }


    public function destroy(inventario $inventario)
    {
        //
    }
    public function indexM(){
        $medic=inventario::where('codigoProducto','like','%VET-%')
        ->get();
        //return $medic;
        return view ('articulos.index2',compact('medic'));
    }

    public function reporte1(){
        $inv=inventario::all();
        $i=inventario::count();
        return view('reporte.reporteInventario',compact('inv','i'));
    }
    public function reporte2(){
        $inv=inventario::all();
        $i=inventario::count();
        return view('reporte.reporteProducto',compact('inv','i'));
    }
    public function pdf(){
        $today = Carbon::now()->format('d/m/Y');
        $pdf = \PDF::loadView('ejemplo', compact('today'));
        return $pdf->download('ejemplo.pdf');
    }
    public function reporte4(){

    }
}
