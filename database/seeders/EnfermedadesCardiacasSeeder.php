<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\enfermedadescardiacas;

class EnfermedadesCardiacasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $enfermedadescardiacas=[
            ["enfercard_codmascota"=>19,"colesterolTotal"=>54.06,"nivelHDL"=>63.29,"nivelLDL"=>95.37,"niveltrigiceridos"=>97.73,"fecha"=>"2022-06-12"],
            ["enfercard_codmascota"=>17,"colesterolTotal"=>54.51,"nivelHDL"=>63.9,"nivelLDL"=>96.22,"niveltrigiceridos"=>59.65,"fecha"=>"2022-09-10"],
            ["enfercard_codmascota"=>19,"colesterolTotal"=>78.1,"nivelHDL"=>65.0,"nivelLDL"=>83.11,"niveltrigiceridos"=>74.62,"fecha"=>"2022-02-04"],
            ["enfercard_codmascota"=>16,"colesterolTotal"=>56.94,"nivelHDL"=>89.7,"nivelLDL"=>88.53,"niveltrigiceridos"=>69.16,"fecha"=>"2022-01-01"],
            ["enfercard_codmascota"=>5,"colesterolTotal"=>99.19,"nivelHDL"=>65.28,"nivelLDL"=>71.28,"niveltrigiceridos"=>50.94,"fecha"=>"2022-10-07"],
            ["enfercard_codmascota"=>5,"colesterolTotal"=>60.0,"nivelHDL"=>96.24,"nivelLDL"=>57.6,"niveltrigiceridos"=>78.61,"fecha"=>"2022-01-17"],
            ["enfercard_codmascota"=>2,"colesterolTotal"=>90.28,"nivelHDL"=>80.17,"nivelLDL"=>86.27,"niveltrigiceridos"=>53.45,"fecha"=>"2022-09-28"],
            ["enfercard_codmascota"=>21,"colesterolTotal"=>61.3,"nivelHDL"=>53.37,"nivelLDL"=>51.55,"niveltrigiceridos"=>98.48,"fecha"=>"2021-12-03"],
            ["enfercard_codmascota"=>14,"colesterolTotal"=>53.4,"nivelHDL"=>67.49,"nivelLDL"=>79.34,"niveltrigiceridos"=>53.33,"fecha"=>"2022-05-02"],
            ["enfercard_codmascota"=>18,"colesterolTotal"=>56.19,"nivelHDL"=>77.15,"nivelLDL"=>62.54,"niveltrigiceridos"=>68.27,"fecha"=>"2022-06-28"],
            ["enfercard_codmascota"=>11,"colesterolTotal"=>74.67,"nivelHDL"=>85.4,"nivelLDL"=>93.38,"niveltrigiceridos"=>60.77,"fecha"=>"2022-08-15"],
            ["enfercard_codmascota"=>7,"colesterolTotal"=>86.29,"nivelHDL"=>74.13,"nivelLDL"=>83.45,"niveltrigiceridos"=>72.3,"fecha"=>"2022-09-25"],
            ["enfercard_codmascota"=>14,"colesterolTotal"=>84.55,"nivelHDL"=>84.89,"nivelLDL"=>59.36,"niveltrigiceridos"=>91.29,"fecha"=>"2021-12-12"],
            ["enfercard_codmascota"=>11,"colesterolTotal"=>75.5,"nivelHDL"=>69.43,"nivelLDL"=>85.42,"niveltrigiceridos"=>71.06,"fecha"=>"2022-02-03"],
            ["enfercard_codmascota"=>5,"colesterolTotal"=>79.01,"nivelHDL"=>99.68,"nivelLDL"=>75.41,"niveltrigiceridos"=>83.2,"fecha"=>"2022-02-19"],
            ["enfercard_codmascota"=>20,"colesterolTotal"=>50.32,"nivelHDL"=>85.81,"nivelLDL"=>71.64,"niveltrigiceridos"=>56.03,"fecha"=>"2022-08-31"],
            ["enfercard_codmascota"=>6,"colesterolTotal"=>69.65,"nivelHDL"=>96.64,"nivelLDL"=>75.98,"niveltrigiceridos"=>88.7,"fecha"=>"2022-07-15"],
            ["enfercard_codmascota"=>3,"colesterolTotal"=>68.3,"nivelHDL"=>99.35,"nivelLDL"=>78.99,"niveltrigiceridos"=>58.42,"fecha"=>"2021-12-23"],
            ["enfercard_codmascota"=>10,"colesterolTotal"=>63.21,"nivelHDL"=>75.13,"nivelLDL"=>80.56,"niveltrigiceridos"=>86.55,"fecha"=>"2022-03-03"],
            ["enfercard_codmascota"=>17,"colesterolTotal"=>96.99,"nivelHDL"=>85.92,"nivelLDL"=>64.06,"niveltrigiceridos"=>66.31,"fecha"=>"2022-09-23"],
            ["enfercard_codmascota"=>18,"colesterolTotal"=>57.29,"nivelHDL"=>50.45,"nivelLDL"=>76.15,"niveltrigiceridos"=>60.25,"fecha"=>"2022-07-21"],
            ["enfercard_codmascota"=>7,"colesterolTotal"=>74.22,"nivelHDL"=>88.36,"nivelLDL"=>51.46,"niveltrigiceridos"=>77.75,"fecha"=>"2022-09-18"],
            ["enfercard_codmascota"=>3,"colesterolTotal"=>71.33,"nivelHDL"=>51.15,"nivelLDL"=>79.56,"niveltrigiceridos"=>95.07,"fecha"=>"2022-04-13"],
            ["enfercard_codmascota"=>1,"colesterolTotal"=>77.43,"nivelHDL"=>57.73,"nivelLDL"=>62.58,"niveltrigiceridos"=>61.17,"fecha"=>"2022-06-05"],
            ["enfercard_codmascota"=>3,"colesterolTotal"=>96.25,"nivelHDL"=>99.45,"nivelLDL"=>97.62,"niveltrigiceridos"=>96.87,"fecha"=>"2022-09-17"],
            ["enfercard_codmascota"=>21,"colesterolTotal"=>53.92,"nivelHDL"=>75.03,"nivelLDL"=>90.64,"niveltrigiceridos"=>88.97,"fecha"=>"2022-09-04"],
            ["enfercard_codmascota"=>5,"colesterolTotal"=>92.75,"nivelHDL"=>50.55,"nivelLDL"=>69.63,"niveltrigiceridos"=>75.13,"fecha"=>"2021-12-07"],
            ["enfercard_codmascota"=>19,"colesterolTotal"=>73.3,"nivelHDL"=>82.97,"nivelLDL"=>73.92,"niveltrigiceridos"=>95.79,"fecha"=>"2022-02-22"],
            ["enfercard_codmascota"=>2,"colesterolTotal"=>88.03,"nivelHDL"=>70.42,"nivelLDL"=>94.94,"niveltrigiceridos"=>97.27,"fecha"=>"2022-03-02"],
            ["enfercard_codmascota"=>2,"colesterolTotal"=>93.11,"nivelHDL"=>95.29,"nivelLDL"=>95.3,"niveltrigiceridos"=>65.35,"fecha"=>"2021-11-29"],
            ["enfercard_codmascota"=>13,"colesterolTotal"=>69.29,"nivelHDL"=>51.65,"nivelLDL"=>59.19,"niveltrigiceridos"=>51.61,"fecha"=>"2022-04-30"],
            ["enfercard_codmascota"=>14,"colesterolTotal"=>90.37,"nivelHDL"=>63.58,"nivelLDL"=>68.31,"niveltrigiceridos"=>81.31,"fecha"=>"2022-08-18"],
            ["enfercard_codmascota"=>17,"colesterolTotal"=>80.34,"nivelHDL"=>74.83,"nivelLDL"=>94.4,"niveltrigiceridos"=>60.13,"fecha"=>"2022-03-15"],
            ["enfercard_codmascota"=>9,"colesterolTotal"=>68.09,"nivelHDL"=>71.19,"nivelLDL"=>54.92,"niveltrigiceridos"=>94.84,"fecha"=>"2022-03-03"],
            ["enfercard_codmascota"=>15,"colesterolTotal"=>56.08,"nivelHDL"=>65.61,"nivelLDL"=>94.91,"niveltrigiceridos"=>69.96,"fecha"=>"2022-05-09"],
            ["enfercard_codmascota"=>5,"colesterolTotal"=>86.43,"nivelHDL"=>76.7,"nivelLDL"=>51.65,"niveltrigiceridos"=>63.19,"fecha"=>"2022-06-27"],
            ["enfercard_codmascota"=>20,"colesterolTotal"=>84.7,"nivelHDL"=>93.9,"nivelLDL"=>62.28,"niveltrigiceridos"=>63.1,"fecha"=>"2021-11-08"],
            ["enfercard_codmascota"=>11,"colesterolTotal"=>88.96,"nivelHDL"=>66.06,"nivelLDL"=>97.2,"niveltrigiceridos"=>67.31,"fecha"=>"2022-03-14"],
            ["enfercard_codmascota"=>14,"colesterolTotal"=>53.67,"nivelHDL"=>50.03,"nivelLDL"=>60.92,"niveltrigiceridos"=>67.9,"fecha"=>"2022-07-08"],
            ["enfercard_codmascota"=>5,"colesterolTotal"=>78.53,"nivelHDL"=>89.02,"nivelLDL"=>94.8,"niveltrigiceridos"=>51.01,"fecha"=>"2022-08-15"],
            ["enfercard_codmascota"=>11,"colesterolTotal"=>99.8,"nivelHDL"=>84.32,"nivelLDL"=>93.97,"niveltrigiceridos"=>78.57,"fecha"=>"2022-07-09"],
            ["enfercard_codmascota"=>9,"colesterolTotal"=>80.77,"nivelHDL"=>74.24,"nivelLDL"=>60.08,"niveltrigiceridos"=>91.13,"fecha"=>"2021-10-23"],
            ["enfercard_codmascota"=>15,"colesterolTotal"=>70.45,"nivelHDL"=>75.98,"nivelLDL"=>97.57,"niveltrigiceridos"=>54.32,"fecha"=>"2022-09-30"],
            ["enfercard_codmascota"=>9,"colesterolTotal"=>53.94,"nivelHDL"=>51.02,"nivelLDL"=>70.39,"niveltrigiceridos"=>71.89,"fecha"=>"2022-05-20"],
            ["enfercard_codmascota"=>14,"colesterolTotal"=>60.83,"nivelHDL"=>60.84,"nivelLDL"=>71.68,"niveltrigiceridos"=>57.43,"fecha"=>"2022-06-25"],
            ["enfercard_codmascota"=>14,"colesterolTotal"=>87.63,"nivelHDL"=>72.84,"nivelLDL"=>86.53,"niveltrigiceridos"=>68.73,"fecha"=>"2022-08-18"],
            ["enfercard_codmascota"=>13,"colesterolTotal"=>51.34,"nivelHDL"=>93.97,"nivelLDL"=>82.78,"niveltrigiceridos"=>57.01,"fecha"=>"2022-10-02"],
            ["enfercard_codmascota"=>10,"colesterolTotal"=>86.13,"nivelHDL"=>94.33,"nivelLDL"=>52.05,"niveltrigiceridos"=>86.12,"fecha"=>"2022-02-01"],
            ["enfercard_codmascota"=>15,"colesterolTotal"=>62.77,"nivelHDL"=>95.06,"nivelLDL"=>70.79,"niveltrigiceridos"=>73.91,"fecha"=>"2022-04-01"],
            ["enfercard_codmascota"=>23,"colesterolTotal"=>53.53,"nivelHDL"=>84.94,"nivelLDL"=>54.31,"niveltrigiceridos"=>85.31,"fecha"=>"2021-11-03"]
        ];

        foreach ($enfermedadescardiacas as $key => $enfermedadcardiaca) {
            enfermedadescardiacas::create($enfermedadcardiaca);
        }
    }
}
