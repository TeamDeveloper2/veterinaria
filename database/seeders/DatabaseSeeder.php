<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\mascota;
use App\Models\cliente;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(CreateUsersSeeder::class);

        cliente::create([ 'codCliente'=>'1'
        ]);

        mascota::create([
            'color'=>'cafe',
            'especie'=>'canino',
            'fechaNacimiento'=>'04-04-2012',
            'genero'=>'H',
            'nombre'=>'misha',
            'peso'=>'09.10',
            'raza'=>'mestizo',
            'codCliente1'=>'1'
        ]);
        mascota::create([
            'color'=>'negro , cafe',
            'especie'=>'canino',
            'fechaNacimiento'=>'04-10-2015',
            'genero'=>'M',
            'nombre'=>'cesar',
            'peso'=>'10.01',
            'raza'=>'pastor Aleman',
            'codCliente1'=>'1'
        ]);

    }
}
