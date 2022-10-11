<?php

namespace App\Http\Controllers;

use App\Models\cita;
use App\Models\User;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function reservarform(){
        return view('cita.agregar');
    }

    public function reservar_post(Request $request){
        $coduser = auth()->user()->id;
        $getdateuser = user::select('type')->where('id', '=', $coduser)->first();         
        if ($getdateuser->type == 2) {
            $datos=( 
                [               
                    'codcita'=>$coduser,
                    'consulta'=>$request->consulta,
                    'curacion'=>$request->curacion,
                    'ecografia'=>$request->ecografia,
                    'hemograma'=>$request->hemograma,
                    'radiografia'=>$request->radiografia,
                    'registroMedico'=>$request->registroMedico,
                    'spa'=>$request->spa,
                    'otro'=>$request->otro,
                    'fecha'=>$request->fecha,
                    'telefono'=>$request->telefono,
                ]);
            cita::create($datos);
            return redirect('/client/mostrar_reserva');
            /* $datoscita = cita::select()->where('codcita', '=', $coduser)->get();   
            echo $datoscita; */            
        }else{
            return print("no esta autorizado para realizar una reserva");
        }
    }

    public function mostrarreserva(){        
        //obtiene el ultimo dato registrado
        $datos = cita::select()
        ->join('users', 'users.id', '=', 'citas.codcita')
        ->join('mascotas', 'users.id', '=', 'mascotas.codmascota_cliente')
        ->orderBy('fecha', 'desc')->first();
        //echo $datos;
        return view ('cita.mostrar', compact('datos'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(cita $cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cita $cita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(cita $cita)
    {
        //
    }
}
