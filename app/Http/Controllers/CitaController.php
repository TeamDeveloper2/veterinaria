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
        $listMascota = $this->listaMascotas();
        return view ('cita.agregar',compact('listMascota'));
=======
    public function reservarform(){     
        $listMascota = $this->listaMascotas();
        return view ('cita.agregar',compact('listMascota'));        
>>>>>>> cdb57ae459c51ea187cc06fc0a9ab9f01d0054bb
    }

    public function reservar_post(Request $request){
        $coduser = auth()->user()->id;
        $getdateuser = user::select('type')->where('id', '=', $coduser)->first();
        if ($getdateuser->type == 2) {
<<<<<<< HEAD
            $datos=(
                [
=======
            $datos=( 
                [               
>>>>>>> cdb57ae459c51ea187cc06fc0a9ab9f01d0054bb
                    'codcita_cliente'=>$coduser,
                    'nombre_mascota'=>$request->nombre_mascota,
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
            return redirect('/client/mostrar_cita');
=======
            return redirect('/client/mostrar_cita');            
>>>>>>> cdb57ae459c51ea187cc06fc0a9ab9f01d0054bb
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
    public function mostrarreserva(){
=======
    public function mostrarreserva(){        
>>>>>>> cdb57ae459c51ea187cc06fc0a9ab9f01d0054bb
        $datos = $this->mostrardatosreserva();
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
        $coduser = auth()->user()->id;
        $datosMascota = mascota::select()->where('codmascota_cliente', $coduser)->get();
        return $datosMascota;
    }

    public function mostrardatosreserva(){
        return $datos = cita::select()
        ->join('users', 'users.id', '=', 'citas.codcita_cliente')
        ->join('mascotas', 'citas.nombre_mascota', '=', 'mascotas.nombre')
        ->orderBy('citas.fecha', 'desc')->first();
    }
<<<<<<< HEAD

}
=======
}
>>>>>>> cdb57ae459c51ea187cc06fc0a9ab9f01d0054bb
