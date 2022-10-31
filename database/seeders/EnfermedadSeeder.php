<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\enfermedad;

class EnfermedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    $enfermedads=[
        ["fecha"=>"2022-10-15","nombreEnfermedad"=>"ResfrioComun","sintomas"=>"fatiga , mareo y fiebre"],
        ["fecha"=>"2022-10-15","nombreEnfermedad"=>"Moquillo","sintomas"=>"fatiga , mareo , fiebre alta , sin ganas"],
        ["fecha"=>"2022-10-15","nombreEnfermedad"=>"ResfrioComun","sintomas"=>"fatiga , mareo y fiebre"]
    ];

        foreach ($enfermedads as $key => $enfermedad) {
            enfermedad::create($enfermedad);
        }
    }
}
