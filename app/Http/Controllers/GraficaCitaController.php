<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraficaCitaController extends Controller
{
    public function index(){
        
        return view('Graficas.GraficaCitas'); 

    }
}
