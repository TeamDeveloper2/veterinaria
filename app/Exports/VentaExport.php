<?php

namespace App\Exports;

use App\Models\venta;
use Maatwebsite\Excel\Concerns\FromCollection;

class VentaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return venta::all();
    }
}
