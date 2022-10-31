<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tableta;

class TabletaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tabletas=[
            ["dosisporDia"=>3,"fecha"=>"2022-10-15","nombreMedicamentos"=>"Paracetamol","precio"=>5.30],
            ["dosisporDia"=>1,"fecha"=>"2022-10-15","nombreMedicamentos"=>"Terracol","precio"=>6.30],
            ["dosisporDia"=>5,"fecha"=>"2022-10-15","nombreMedicamentos"=>"Parasitario","precio"=>5.30],

        ];

            foreach ($tabletas as $key => $tableta) {
                tableta::create($tableta);
            }
    }

}
