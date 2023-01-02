<?php

namespace App\Http\Controllers;

use App\Models\proveedor;
use App\Models\bitacora;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista = $this->listaProveedor();
        $total = $this->listaProveedor()->count();
        return view('proveedor.index', compact('lista','total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedor.registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos=(
            [
                'nombre_proveedor'=>$request->nombre_proveedor,
                'apePaterno'=>$request->apePaterno,
                'apeMaterno'=>$request->apeMaterno,
                'ci'=>$request->ci,
                'genero'=>$request->genero,
                'nombre_empresa'=>$request->nombre_empresa,
                'direccion_empresa'=>$request->direccion_empresa,
                'telefono'=>$request->telefono
            ]);
            $bitacora = new bitacora();
            $bitacora->name = 'admin';
            $bitacora->causer_id = '1';
            $bitacora->long_name = 'producto';
            $bitacora->descripcion = 'crear proveedor';
            $bitacora->subject_id = '15';
            $bitacora->save();
        proveedor::create($datos);
        return redirect()->route('proveedor_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show($ci)
    {
        $getdato = $this->itemProveedor($ci);
        return view('proveedor.mostrar', compact('getdato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit($ci)
    {
        $getdato = $this->itemProveedor($ci);
        return view('proveedor.modificar', compact('getdato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, proveedor $proveedor)
    {
        $proveedor = proveedor::find($request->ci);
        try {
            $proveedor->ci = $request->ci;
            $proveedor->nombre_proveedor = $request->nombre_proveedor;
            $proveedor->apePaterno = $request->apePaterno;
            $proveedor->apeMaterno = $request->apeMaterno;
            $proveedor->genero = $request->genero;
            $proveedor->nombre_empresa = $request->nombre_empresa;
            $proveedor->direccion_empresa = $request->direccion_empresa;
            $proveedor->telefono = $request->telefono;
            $bitacora = new bitacora();
            $bitacora->name = 'admin';
            $bitacora->causer_id = '1';
            $bitacora->long_name = 'producto';
            $bitacora->descripcion = 'update proveedor';
            $bitacora->subject_id = '15';
            $bitacora->save();
            $proveedor->update();
            return redirect()->route('proveedor_index');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors('El dato no existe')->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(proveedor $proveedor)
    {
        //
    }

    function listaProveedor(){
        return proveedor::orderBy('nombre_empresa', 'asc')->get();
    }

    function itemProveedor($ci){
        return proveedor::select()->where('ci', '=', $ci)->first();
    }
}
