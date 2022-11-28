<?php

namespace App\Exports;

use App\Models\inventario;
use Maatwebsite\Excel\Concerns\FromCollection;

class InventariosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return inventario::all();
    }

  
}
