<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\mascota;
use App\Models\cliente;
use App\Models\bitacora;
use App\Models\registromedico;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ApiController extends Controller
{
    //
    public function users(Request $request){
        $use= User::all();
        return response()->json($use);
    }


    public function login(Request $request){
        $dato = json_decode($request->getContent());
        $u = User::where('email',$dato->email)->first();
        if($u){
            if(Hash::check($dato->password,$u->password)){
                $token=$u->createToken("example");
                $resp["token"]=$token->plainTextToken;
            }else{
            $resp["msg"]="No es la contraseña !!";
            }
        }else{
          $resp["msg"]="Usted no es Usuario";
        }
       return $resp;
    }

    public function ListarCliente(Request $request){
      // $cl=User::find(auth()->id());
        //$cl2=$cl->id;
      //  return $cl;
       return $request ->user();
    }

   /** public function vistaCrear()
    {
        return view('cliente.agregar'); // la vista movil iria en el return
    }*/
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
        $c->password=bcrypt($request->contra);
        $c->save();

        $cc->codCliente=$c->id;
        $cc->save();

    }
    public function ListarMascotaDelClient(){
        $cod=User::find(auth()->id());
        $cod1=$cod->id;
        $masc=mascota::where('mascotas.codmascota_cliente','=',$cod1)->get();
        return $masc;
    }

    public function vistaMasco(){
        $n = user::all();
        return view ('mascota.agregar',compact('n'));
    }

    public function aggMasco(Request $request)
    {
        $d=new mascota();
        $d->nombre= $request->nombre;
        $d->raza=$request->raza;
        $d->color=$request->color;
        $d->genero=$request->genero;
        $d->especie=$request->especie;
        $d->fechaNacimiento=$request->fecha_nacimiento;
        $d->peso=$request->peso;
        $d->codmascota_cliente=$request->empleado;
        $d->save();



    }
}
