<?php

namespace App\Http\Controllers;

use App\Models\cita;
use App\Models\User;
use App\Models\mascota;
use Illuminate\Http\Request;

class CitaController extends Controller
{
<<<<<<< HEAD
    public function index(){
        return view('cita.index');
    }
    public function reservarform(){
        return view('cita.agregar');
=======
    public function reservarform(){     
        $listMascota = $this->listaMascotas();
        return view ('cita.agregar',compact('listMascota'));        
>>>>>>> cb0a0f388d06123d4a4d18724a7c186df330b967
    }

    public function reservar_post(Request $request){
        $coduser = auth()->user()->id;
        $getdateuser = user::select('type')->where('id', '=', $coduser)->first();
        if ($getdateuser->type == 2) {
<<<<<<< HEAD
            $datos=(
                [
                    'codcita'=>$coduser,
=======
            $datos=( 
                [               
                    'codcita_cliente'=>$coduser,
                    'nombre_mascota'=>$request->nombre_mascota,
>>>>>>> cb0a0f388d06123d4a4d18724a7c186df330b967
                    'motivo'=>$request->motivo,
                    'otro'=>$request->otro,
                    'fecha'=>$request->fecha,
                    'telefono'=>$request->telefono,
                ]);
            cita::create($datos);
<<<<<<< HEAD
            return redirect('/client/mostrar_reserva');
            /* $datoscita = cita::select()->where('codcita', '=', $coduser)->get();
            echo $datoscita; */
=======
            return redirect('/client/mostrar_cita');            
>>>>>>> cb0a0f388d06123d4a4d18724a7c186df330b967
        }else{
            return print("no esta autorizado para realizar una reserva");
        }
    }

<<<<<<< HEAD
    public function mostrarreserva(){
        //obtiene el ultimo dato registrado
        $datos = cita::select()
        ->join('users', 'users.id', '=', 'citas.codcita')
        ->join('mascotas', 'users.id', '=', 'mascotas.codmascota_cliente')
        ->orderBy('citas.fecha', 'desc')->first();
=======
    public function mostrarreserva(){        
        $datos = $this->mostrardatosreserva();
>>>>>>> cb0a0f388d06123d4a4d18724a7c186df330b967
        return view ('cita.mostrar', compact('datos'));
    }

    public function modificarReserva(){  
        $getdatos = $this->mostrardatosreserva();
        $listMascota = $this->listaMascotas();        
        return view ('cita.modificar', compact('getdatos', 'listMascota'));
    }

    public function actualizarReserva(Request $request, $codcita){
        $dato = cita::find($codcita);
        $dato->nombre_mascota = $request->input('nombre_mascota');
        $dato->motivo = $request->input('motivo');
        $dato->otro = $request->input('otro');
        $dato->telefono = $request->input('telefono');
        $dato->fecha = $request->input('fecha');
        $dato->update();  
        return redirect()->route('mostrarCita');
    }    


    //funciones recurrentes
    public function listaMascotas(){
        $datosMascota = mascota::select()->join('clientes', 'clientes.codCliente', '=', 'mascotas.codmascota_cliente')->get();
        return $datosMascota;
    }    

    public function mostrardatosreserva(){
        return $datos = cita::select()
        ->join('users', 'users.id', '=', 'citas.codcita_cliente')
        ->join('mascotas', 'citas.nombre_mascota', '=', 'mascotas.nombre')
        ->orderBy('citas.fecha', 'desc')->first();        
    }

}