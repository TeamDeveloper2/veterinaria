<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\mascota;

class MascotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mascotas = [
            [
                'color'=>'cafe',
                'codmascota_cliente'=>2,
                'especie'=>'canino',
                'fechaNacimiento'=>'04-04-2012',
                'genero'=>'H',
                'nombre'=>'misha',
                'peso'=>'09.10',
                'raza'=>'mestizo',
                'codCliente1'=>'1',
            ],
            [
                'color'=>'negro , cafe',
                'codmascota_cliente'=>2,
                'especie'=>'canino',
                'fechaNacimiento'=>'04-10-2015',
                'genero'=>'M',
                'nombre'=>'cesar',
                'peso'=>'10.01',
                'raza'=>'pastor Aleman',
                'codCliente1'=>'1'
            ],
            [
                'color'=>'negro , cafe',
                'codmascota_cliente'=>2,
                'especie'=>'canino',
                'fechaNacimiento'=>'04-10-2015',
                'genero'=>'M',
                'nombre'=>'Rambo',
                'peso'=>'10.01',
                'raza'=>'pastor Aleman',
                'codCliente1'=>'1'
            ],
            [
                'color'=>'negro , cafe',
                'codmascota_cliente'=>2,
                'especie'=>'canino',
                'fechaNacimiento'=>'04-10-2015',
                'genero'=>'M',
                'nombre'=>'Shagi',
                'peso'=>'10.01',
                'raza'=>'pastor Aleman',
                'codCliente1'=>'1'
            ],
        ];
    
        foreach ($mascotas as $key => $mascota) {
            Mascota::create($mascota);
        }
    }
}
