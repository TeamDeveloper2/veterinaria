<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\pmb;

class PmbsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pmbs = [
            ["pmb_codmascota"=>22,"calcio"=>43.49,"electrocitos"=>63.77,"glucosa"=>87.55,"fecha"=>"2022-05-28"],
            ["pmb_codmascota"=>15,"calcio"=>57.45,"electrocitos"=>48.99,"glucosa"=>83.73,"fecha"=>"2021-11-14"],            
            ["pmb_codmascota"=>4,"calcio"=>48.74,"electrocitos"=>24.97,"glucosa"=>56.62,"fecha"=>"2021-11-17"],                                    
            ["pmb_codmascota"=>7,"calcio"=>53.52,"electrocitos"=>44.6,"glucosa"=>50.35,"fecha"=>"2022-05-16"],
            ["pmb_codmascota"=>10,"calcio"=>62.67,"electrocitos"=>52.16,"glucosa"=>93.44,"fecha"=>"2022-06-14"],            
            ["pmb_codmascota"=>23,"calcio"=>57.05,"electrocitos"=>40.19,"glucosa"=>23.61,"fecha"=>"2022-01-16"],                        
            ["pmb_codmascota"=>10,"calcio"=>20.99,"electrocitos"=>15.09,"glucosa"=>96.6,"fecha"=>"2022-09-02"],
            ["pmb_codmascota"=>1,"calcio"=>1.62,"electrocitos"=>41.03,"glucosa"=>62.26,"fecha"=>"2021-12-27"],
            ["pmb_codmascota"=>1,"calcio"=>18.81,"electrocitos"=>73.56,"glucosa"=>32.05,"fecha"=>"2021-11-06"],
            ["pmb_codmascota"=>18,"calcio"=>13.44,"electrocitos"=>87.95,"glucosa"=>39.27,"fecha"=>"2021-11-18"],
            ["pmb_codmascota"=>19,"calcio"=>59.75,"electrocitos"=>95.57,"glucosa"=>16.8,"fecha"=>"2022-02-03"],
            ["pmb_codmascota"=>11,"calcio"=>37.36,"electrocitos"=>71.89,"glucosa"=>49.75,"fecha"=>"2022-01-15"],                    
            ["pmb_codmascota"=>9,"calcio"=>58.39,"electrocitos"=>76.89,"glucosa"=>40.23,"fecha"=>"2021-12-09"],
            ["pmb_codmascota"=>17,"calcio"=>96.21,"electrocitos"=>83.3,"glucosa"=>3.01,"fecha"=>"2022-09-16"],                        
            ["pmb_codmascota"=>18,"calcio"=>35.72,"electrocitos"=>68.84,"glucosa"=>33.5,"fecha"=>"2021-11-21"],        
            ["pmb_codmascota"=>15,"calcio"=>78.06,"electrocitos"=>32.7,"glucosa"=>95.93,"fecha"=>"2022-04-30"],
            ["pmb_codmascota"=>2,"calcio"=>97.76,"electrocitos"=>42.49,"glucosa"=>46.96,"fecha"=>"2022-04-01"],                                                    
            ["pmb_codmascota"=>8,"calcio"=>21.17,"electrocitos"=>12.16,"glucosa"=>94.07,"fecha"=>"2022-01-27"],            
            ["pmb_codmascota"=>11,"calcio"=>8.7,"electrocitos"=>80.01,"glucosa"=>46.03,"fecha"=>"2022-05-09"],
            ["pmb_codmascota"=>19,"calcio"=>86.26,"electrocitos"=>49.94,"glucosa"=>64.49,"fecha"=>"2022-01-08"],
            ["pmb_codmascota"=>1,"calcio"=>15.53,"electrocitos"=>75.78,"glucosa"=>88.33,"fecha"=>"2021-10-25"],        
            ["pmb_codmascota"=>13,"calcio"=>1.12,"electrocitos"=>91.28,"glucosa"=>91.38,"fecha"=>"2022-02-07"],
            ["pmb_codmascota"=>15,"calcio"=>79.52,"electrocitos"=>21.53,"glucosa"=>55.09,"fecha"=>"2021-10-19"]            
        ];

        foreach ($pmbs as $key => $pmb) {
            pmb::create($pmb);
        }
    }
}
