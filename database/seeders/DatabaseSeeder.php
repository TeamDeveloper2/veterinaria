<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use GuzzleHttp\Promise\Create;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CreateUsersSeeder::class);            
        $this->call(ClientesSeeder::class);
        $this->call(AdministradoresSeeder::class);        
        $this->call(MascotaSeeder::class);        
        $this->call(CitasSeeder::class);
        $this->call(CscSeeder::class);        
        $this->call(PmbsSeeder::class);
        $this->call(EnfermedadesCardiacasSeeder::class);
    }
}
