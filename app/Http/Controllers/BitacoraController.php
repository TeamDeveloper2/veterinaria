<?php

namespace App\Http\Controllers;


use App\Models\user;
use App\Models\bitacora;
use Illuminate\Http\Request;

class BitacoraController extends Controller
{
    public function index(){
        $bitacora1 = bitacora::all();
        //return view('bitacora.index', compact('bitacora'));
        return view('bitacora.index' , compact('bitacora1'));
    }
}
