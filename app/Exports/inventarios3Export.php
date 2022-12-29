<?php

namespace App\Exports;

use App\Models\inventario; 
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class inventarios3Export implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        return view('InventarioReportes.excel3', [
            'invs' => inventario::all()
        ]);
    }
    
  
}