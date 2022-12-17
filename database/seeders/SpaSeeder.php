<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\spa;

class SpaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $spas = [
            ["codspa_codmascota"=>1,"codspa_codcliente"=>2,"motivo"=>"ducha","otro"=>"Mandy","precio"=>"5.31","fecha"=>"2010-09-06"],
            ["codspa_codmascota"=>2,"codspa_codcliente"=>2,"motivo"=>"ducha","otro"=>"Rosella","precio"=>"4.37","fecha"=>"2009-01-28"],
            ["codspa_codmascota"=>5,"codspa_codcliente"=>4,"motivo"=>"ducha","otro"=>"Godart","precio"=>"0.15","fecha"=>"2002-10-30"],
            ["codspa_codmascota"=>6,"codspa_codcliente"=>4,"motivo"=>"limpiezadental","otro"=>"Quintina","precio"=>"3.50","fecha"=>"2016-07-21"],
            ["codspa_codmascota"=>10,"codspa_codcliente"=>5,"motivo"=>"limpiezadental","otro"=>"Guillaume","precio"=>"7.02","fecha"=>"2010-12-16"],
            ["codspa_codmascota"=>12,"codspa_codcliente"=>7,"motivo"=>"limpiezadental","otro"=>"Jeffry","precio"=>"5.17","fecha"=>"2018-05-03"],
            ["codspa_codmascota"=>5,"codspa_codcliente"=>7,"motivo"=>"peluqueria","otro"=>"Vincenz","precio"=>"0.90","fecha"=>"2019-02-23"],
            ["codspa_codmascota"=>12,"codspa_codcliente"=>8,"motivo"=>"peluqueria","otro"=>"Denis","precio"=>"3.95","fecha"=>"2013-02-16"],
            ["codspa_codmascota"=>15,"codspa_codcliente"=>12,"motivo"=>"peluqueria","otro"=>"Suzette","precio"=>"8.17","fecha"=>"2000-12-24"],
            ["codspa_codmascota"=>23,"codspa_codcliente"=>13,"motivo"=>"limpiezadental","otro"=>"Bancroft","precio"=>"6.82","fecha"=>"2015-08-02"],
            ["codspa_codmascota"=>22,"codspa_codcliente"=>14,"motivo"=>"limpiezadental","otro"=>"Ira","precio"=>"3.06","fecha"=>"2009-02-15"],
            ["codspa_codmascota"=>20,"codspa_codcliente"=>17,"motivo"=>"limpiezadental","otro"=>"Jaquith","precio"=>"2.03","fecha"=>"2012-07-26"],
            ["codspa_codmascota"=>15,"codspa_codcliente"=>22,"motivo"=>"ducha","otro"=>"Editha","precio"=>"4.61","fecha"=>"2007-09-24"],
            ["codspa_codmascota"=>13,"codspa_codcliente"=>22,"motivo"=>"ducha","otro"=>"Adriena","precio"=>"9.46","fecha"=>"2013-02-01"],
            ["codspa_codmascota"=>11,"codspa_codcliente"=>24,"motivo"=>"ducha","otro"=>"Haley","precio"=>"5.66","fecha"=>"2016-06-23"],
            ["codspa_codmascota"=>5,"codspa_codcliente"=>24,"motivo"=>"ducha","otro"=>"Betsey","precio"=>"7.85","fecha"=>"2008-03-14"],
            ["codspa_codmascota"=>7,"codspa_codcliente"=>26,"motivo"=>"peluqueria","otro"=>"Shaine","precio"=>"7.83","fecha"=>"2013-10-30"],
            ["codspa_codmascota"=>2,"codspa_codcliente"=>29,"motivo"=>"peluqueria","otro"=>"Onfroi","precio"=>"2.30","fecha"=>"2018-08-29"],
            ["codspa_codmascota"=>1,"codspa_codcliente"=>29,"motivo"=>"peluqueria","otro"=>"Kyla","precio"=>"0.92","fecha"=>"2002-10-09"],
            ["codspa_codmascota"=>1,"codspa_codcliente"=>33,"motivo"=>"peluqueria","otro"=>"Marlo","precio"=>"3.77","fecha"=>"2021-03-17"]
        ];

        foreach ($spas as $key => $spa) {
            spa::create($spa);
        }
    }
}
