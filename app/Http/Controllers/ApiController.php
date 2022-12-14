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
    // API USUARIO
    public function users(Request $request){
        $use= User::all();
        return response()->json($use);
    }

public function id(Request $request){
    return $request ->user();
}
    public function login(Request $request){
       $credentials = $request -> validate([
        'email' => 'required | email',
        'password'=> 'required',
       ]);
       if(Auth::attempt($credentials)){
        $user=Auth::user();
        $token = $user->createToken($user->id)->plainTextToken;
        //$token = md5(time()).'.'.md5($request->email);
        $user ->forceFill([
            'api_token' => $token,
        ])->save();
        return response()->json([
            'token' => $token
        ]);
       }
       return response()->json([
        'message'=>'The provided credentials do not match our records.'
       ]);
    }
public function logout(Request $request){
    $request->user()->forceFill([
        'api_token'=>null,
    ])->save();

    return response()->json(['message' => 'success']);
}
    public function viewCliente(Request $request){
        
       return Auth::user();
    }


    public function registerClient(Request $request){
        $request -> validate([
            'name'=>'required',
            'apePaterno'=>'required',
            'apeMaterno'=>'required',
            'fechNacimiento'=>'required',
            'Genero'=>'required',
            'Nacionalidad'=>'required',
            'email'=>'required | email | unique:users',
            'password'=> 'required',
        ]);

        $result = User::create([
            'name'=>$request->name,
            'apePaterno'=>$request->apePaterno,
            'apeMaterno'=>$request->apeMaterno,
            'fechNacimiento'=>$request->fechNacimiento,
            'Genero'=>$request->Genero,
            'Nacionalidad'=>$request->Nacionalidad,
            'email'=>$request->email,
            'password'=> bcrypt($request->password),
        ]);
        return $result;


        //API MASCOTA
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

        $request -> validate([
            'nombre'=>'required',
            'color'=>'required',
            'especie'=>'required',
            'fechaNacimiento'=>'required',
            'genero'=>'required',
            'peso'=>'required',
            'raza'=> 'required',
            'codmascota_cliente'=>'required'
        ]);

        $result = mascota::create([
            'nombre'=>$request->nombre,
            'color'=>$request->color,
            'especie'=>$request->especie,
            'fechNacimiento'=>$request->fechaNacimiento,
            'genero'=>$request->genero,
            'peso'=>$request->peso,
            'raza'=> $request->raza,
            'codmascota_cliente'=>$request->codmascota_cliente,

        ]);
        


        $r = new registromedico();
        $r->codmasc=$d->codmascota;
        $r->save();
        return $result;

    }
}
