<?php

namespace App\Exports;

use App\Models\cita;
use Maatwebsite\Excel\Concerns\FromCollection;

class CitaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return cita::all();
    }
}
