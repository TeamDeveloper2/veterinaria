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


        ];

            foreach ($tabletas as $key => $tableta) {
                tableta::create($tableta);
            }
    }

}
