<?php

namespace App\Http\Controllers;
use App\Models\inventario;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;



class ReporteInventarioController extends Controller
{
    public function index()
    {
        $inv = inventario::all();

        return view('InventarioReportes.index', compact('inv'));
    }

    public function downloadPdf()
    {
        $inv = inventario::all();

       view()->share('InventarioReportes.pdf',$inv);

        $pdf = PDF::loadView('InventarioReportes.pdf', ['inv' => $inv]);

        return $pdf->download('InventarioReportes.pdf');
    }
}
