<?php

namespace App\Exports;
use App\Models\inventario; 
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class inventarioExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        $fecha1 = now()->toDateString();
        $fecha2 = now()->addDays(30)->toDateString();
        return view('InventarioReportes.excel1', [
            'invs' => inventario::whereBetween('fecha_vencimiento', [$fecha1, $fecha2])->get()
        ]);
    }
    
  
}
