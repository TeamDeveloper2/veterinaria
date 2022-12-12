<?php

namespace App\Exports;

use App\Models\inventario;
use Maatwebsite\Excel\Concerns\FromCollection;

class Inventarios2Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return inventario::select('nombreItem','cantidadAnterior','cantidadActual','cantidadTotal','fecha','precio')->get();
    }
}
