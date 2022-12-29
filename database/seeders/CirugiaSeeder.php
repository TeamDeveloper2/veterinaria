<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\cirugia;

class CirugiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cirugias =[
            ["codcirugia_codcliente"=>1,"codcirugia_codmascota"=>1,"tipo_cirugia"=>"castracion","precio"=>30.56,"fecha"=>"2022-09-04"],
            ["codcirugia_codcliente"=>2,"codcirugia_codmascota"=>2,"tipo_cirugia"=>"castracion","precio"=>39.51,"fecha"=>"2022-03-10"],
            ["codcirugia_codcliente"=>19,"codcirugia_codmascota"=>3,"tipo_cirugia"=>"cataratas","precio"=>94.43,"fecha"=>"2022-04-17"],
            ["codcirugia_codcliente"=>3,"codcirugia_codmascota"=>4,"tipo_cirugia"=>"cataratas","precio"=>67.93,"fecha"=>"2022-12-02"],
            ["codcirugia_codcliente"=>4,"codcirugia_codmascota"=>5,"tipo_cirugia"=>"aputacion_cola","precio"=>54.61,"fecha"=>"2022-12-22"],
            ["codcirugia_codcliente"=>20,"codcirugia_codmascota"=>6,"tipo_cirugia"=>"aputacion_cola","precio"=>90.0,"fecha"=>"2022-12-03"],
            ["codcirugia_codcliente"=>21,"codcirugia_codmascota"=>7,"tipo_cirugia"=>"oreja","precio"=>26.84,"fecha"=>"2022-01-12"],
            ["codcirugia_codcliente"=>33,"codcirugia_codmascota"=>8,"tipo_cirugia"=>"traumatologia","precio"=>74.28,"fecha"=>"2022-11-16"],
            ["codcirugia_codcliente"=>36,"codcirugia_codmascota"=>9,"tipo_cirugia"=>"traumatologia","precio"=>68.84,"fecha"=>"2021-12-31"],
            ["codcirugia_codcliente"=>37,"codcirugia_codmascota"=>10,"tipo_cirugia"=>"castracion","precio"=>4.36,"fecha"=>"2022-02-14"],
            ["codcirugia_codcliente"=>1,"codcirugia_codmascota"=>11,"tipo_cirugia"=>"traumatologia","precio"=>83.95,"fecha"=>"2022-12-23"],
            ["codcirugia_codcliente"=>1,"codcirugia_codmascota"=>12,"tipo_cirugia"=>"castracion","precio"=>6.86,"fecha"=>"2022-06-11"],
            ["codcirugia_codcliente"=>44,"codcirugia_codmascota"=>13,"tipo_cirugia"=>"cataratas","precio"=>58.56,"fecha"=>"2022-12-21"],
            ["codcirugia_codcliente"=>46,"codcirugia_codmascota"=>14,"tipo_cirugia"=>"aputacion_cola","precio"=>89.42,"fecha"=>"2022-06-29"],
            ["codcirugia_codcliente"=>1,"codcirugia_codmascota"=>1,"tipo_cirugia"=>"cataratas","precio"=>4.85,"fecha"=>"2022-01-29"],
            ["codcirugia_codcliente"=>2,"codcirugia_codmascota"=>2,"tipo_cirugia"=>"aputacion_cola","precio"=>4.86,"fecha"=>"2022-06-22"],
            ["codcirugia_codcliente"=>19,"codcirugia_codmascota"=>3,"tipo_cirugia"=>"aputacion_cola","precio"=>86.87,"fecha"=>"2022-02-03"],
            ["codcirugia_codcliente"=>3,"codcirugia_codmascota"=>4,"tipo_cirugia"=>"traumatologia","precio"=>86.81,"fecha"=>"2022-11-16"],
            ["codcirugia_codcliente"=>4,"codcirugia_codmascota"=>5,"tipo_cirugia"=>"aputacion_cola","precio"=>99.33,"fecha"=>"2022-02-23"],
            ["codcirugia_codcliente"=>20,"codcirugia_codmascota"=>6,"tipo_cirugia"=>"traumatologia","precio"=>11.82,"fecha"=>"2022-06-18"]
        ];

        foreach ($cirugias as $key => $cirugia) {
            cirugia::create($cirugia);
        }
    }
}
