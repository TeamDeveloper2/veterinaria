<?php

namespace App\Exports;

use App\Models\cita;
use Maatwebsite\Excel\Concerns\FromCollection;

class Cita2Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return cita::all();
    }
}
