<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\mascota;
use App\Models\cliente;
use App\Models\bitacora;
use App\Models\registromedico;
use Illuminate\Support\Facades\Hash;


class ApiController extends Controller
{
    //
    public function users(Request $request){
        $use= User::all();
        return response()->json($use);
    }


    public function login(Request $request){
        $resp = ["estado"=>0,"msg"=>""];
        $dato = json_decode($request->getContent());
        $u = User::where('email',$dato->email)->first();
        //return response()->json($u);
        if($u){
            if(Hash::check($dato->password,$u->password)){
                $token=$u->createToken("example");
                $resp["estado"]=1;
                $resp["msg"]=$token->plainTextToken;
            }else{
            $resp["msg"]="No es la contraseña !!";
            }
        }else{
          $resp["msg"]="Usted no es Usuario";
        }
       return $resp;
    }

    public function ListarCliente(){
        $cl=User::all();
        return $cl;
    }

    public function vistaCrear()
    {
        return view('cliente.agregar'); // la vista movil iria en el return
    }
    public function aggCliente(Request $request){

        $c=new User();
        $cc=new cliente();

        $c->name=$request->nombres;
        $c->apePaterno=$request->pat;
        $c->apeMaterno=$request->mat;
        $c->fechNacimiento=$request->nac;
        $c->Genero=$request->gen;
        $c->Nacionalidad=$request->nacional;
        $c->email=$request->correo;
        $c->save();

       /* $cc->id=$c->id;
        $cc->save();*/

        $bitacora = new bitacora();
        $bitacora->name = 'admin';
        $bitacora->causer_id = $c->id;
        $bitacora->long_name = 'cliente';
        $bitacora->descripcion = 'crear';
        $bitacora->subject_id = $c->id;
        $bitacora->save();

    }
    public function ListarMascota(){
        $masc=mascota::all();
        return $masc;
    }

    public function vistaMasco(){
        $n = user::all();
        return view ('mascota.agregar',compact('n'));
    }

    public function aggMasco(Request $request)
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
}
