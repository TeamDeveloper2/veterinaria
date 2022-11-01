<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\emergencia;

class EmergenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $emers=[
            ["fecha"=>"2022-10-15","envenenamiento"=>0,"fracturaHueso"=>1,"enfermedad"=>0,"tratamiento"=>0,"parto"=>0,"codmascotas"=>1],
            ["fecha"=>"2022-10-15","envenenamiento"=>1,"fracturaHueso"=>0,"enfermedad"=>0,"tratamiento"=>0,"parto"=>0,"codmascotas"=>2],
            ["fecha"=>"2022-10-15","envenenamiento"=>0,"fracturaHueso"=>0,"enfermedad"=>1,"tratamiento"=>0,"parto"=>0,"codmascotas"=>3]

        ];
        foreach ($emers as $key => $emer) {
            emergencia::create($emer);
        }
    }
}
