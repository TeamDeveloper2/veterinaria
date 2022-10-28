<?php

namespace App\Http\Controllers;

use App\Models\ecografia;
use App\Models\mascota;
use Illuminate\Http\Request;
use Exception;

class EcografiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getdatos = $this->EcografiaMascotaCliente();
        $contador = 1;
        return view('ecografia.lista', compact('getdatos', 'contador'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ecografia.registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {      
        try {            
            $datos=( 
                [               
                    'codecografia_mascota'=>$request->codecografia_mascota,
                    'area'=>$request->area,
                    'observaciones'=>$request->observaciones,
                    'telefono'=>$request->telefono,
                    'fecha'=>$request->fecha,
                    'img_ecografia'=>$request->img_ecografia,
                ]);        
            ecografia::create($datos);                     
            return redirect()->route('registrar_ecografia');
        } catch (Exception $e) {            
            return redirect()->back()->withErrors('datos incorrectos')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ecografia  $ecografia
     * @return \Illuminate\Http\Response
     */
    public function show($codecografia)
    {        
        $datoecografia = ecografia::select()
        ->where('codecografia', $codecografia)
        ->join('mascotas', 'mascotas.codmascota', '=', 'codecografia_mascota')
        ->join('users', 'mascotas.codmascota_cliente', '=', 'users.id')
        ->get()->first();
        return view('ecografia.mostrar', compact('datoecografia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ecografia  $ecografia
     * @return \Illuminate\Http\Response
     */
    public function edit(ecografia $ecografia, $codigo)
    {
        $getitem = $this->geteItemEcografia($codigo);        
        return view('ecografia.modificar', compact('getitem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ecografia  $ecografia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ecografia $ecografia)
    {
        $pmb = ecografia::find($request->codecografia);        
        $pmb->codecografia_mascota = $request->codecografia_mascota;
        $pmb->area = $request->area;
        $pmb->observaciones = $request->observaciones;
        $pmb->telefono = $request->telefono;
        $pmb->fecha = $request->fecha;
        $pmb->img_ecografia = $request->img_ecografia;
        $pmb->update();        
        return redirect()->route('lista_ecografia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ecografia  $ecografia
     * @return \Illuminate\Http\Response
     */
    public function destroy(ecografia $ecografia)
    {
        //
    }

    public function EcografiaMascotaCliente(){
        $getdatos = ecografia::select()
        ->join('mascotas', 'mascotas.codmascota', '=', 'codecografia_mascota')
        ->join('users', 'mascotas.codmascota_cliente', '=', 'users.id')
        ->get();
        return $getdatos;
    }

    public function geteItemEcografia($codigo){
        return ecografia::find($codigo);
    }
}
