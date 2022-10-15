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
                'codcita_cliente'=>2,
                'nombre_mascota'=>'cesar',
                'motivo'=>'consulta',                
                'fecha'=>'2021-08-20',                
                'otro'=>'',                
                'telefono'=>70002512,                
            ],
            [
                'codcita_cliente'=>2,
                'nombre_mascota'=>'cesar',         
                'motivo'=>'curacion',                
                'fecha'=>'2021-08-21',                
                'otro'=>'',                
                'telefono'=>70002512, 
            ],
        ];
    
        foreach ($citas as $key => $cita) {
            cita::create($cita);
        }
    }
}
