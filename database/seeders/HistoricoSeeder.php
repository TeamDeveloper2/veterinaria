<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\registromedico;

class HistoricoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $historias=[
            ["fecha"=>"2022-10-15","codenferm"=>1,"codtab"=>1,"codmasc"=>1,"codeme"=>1],
            ["fecha"=>"2022-10-15","codenferm"=>2,"codtab"=>2,"codmasc"=>2,"codeme"=>2],
            ["fecha"=>"2022-10-15","codenferm"=>3,"codtab"=>3,"codmasc"=>3,"codeme"=>3]
        ];

        foreach ($historias as $key => $historia) {
            registromedico::create($historia);
        }
    }
}
