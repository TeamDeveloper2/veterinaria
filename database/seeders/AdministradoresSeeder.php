<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\administrador;

class AdministradoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administradores = [
            ['codAdministrador'=>5],
            ['codAdministrador'=>6],
            ['codAdministrador'=>9],
            ['codAdministrador'=>10],
            ['codAdministrador'=>11],
            ['codAdministrador'=>15],
            ['codAdministrador'=>16],
            ['codAdministrador'=>18],
            ['codAdministrador'=>20],
            ['codAdministrador'=>23],
            ['codAdministrador'=>25],
            ['codAdministrador'=>27],
            ['codAdministrador'=>28],
            ['codAdministrador'=>30],
            ['codAdministrador'=>31],
            ['codAdministrador'=>32],
            ['codAdministrador'=>34],
            ['codAdministrador'=>35],
            ['codAdministrador'=>38],
            ['codAdministrador'=>39],
            ['codAdministrador'=>40],
            ['codAdministrador'=>41],
            ['codAdministrador'=>42],
            ['codAdministrador'=>43],
            ['codAdministrador'=>45],
            ['codAdministrador'=>47],
            ['codAdministrador'=>49],
            ['codAdministrador'=>50]
        ];
    
        foreach ($administradores as $key => $administrador) {
            administrador::create($administrador);
        }
    }
}
