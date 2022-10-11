<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\cita;

class CitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $citas = [
            [
                'codcita'=>2,
                'motivo'=>'consulta',                
                'fecha'=>'2022-08-20',                
                'otro'=>'',                
                'telefono'=>70002512,                
            ],
            [
                'codcita'=>2,                
                'motivo'=>'curacion',                
                'fecha'=>'2022-08-20',                
                'otro'=>'',                
                'telefono'=>70002512, 
            ],
        ];
    
        foreach ($citas as $key => $cita) {
            cita::create($cita);
        }
    }
}
