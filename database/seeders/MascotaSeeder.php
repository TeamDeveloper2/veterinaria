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
            ['color'=>'cafe','codmascota_cliente'=>1,'especie'=>'canino','fechaNacimiento'=>'04-04-2012','genero'=>'H','nombre'=>'misha','peso'=>'09.10','raza'=>'mestizo','codCliente1'=>'1'],
            ['color'=>'negro, cafe','codmascota_cliente'=>2,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'cesar','peso'=>'10.01','raza'=>'pastor Aleman','codCliente1'=>'1'],
            ['color'=>'negro, cafe','codmascota_cliente'=>2,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'firulay','peso'=>'10.01','raza'=>'pastor Aleman','codCliente1'=>'1'],
            ['color'=>'negro, cafe','codmascota_cliente'=>3,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Rambo','peso'=>'10.01','raza'=>'pastor Aleman','codCliente1'=>'1'],
            ['color'=>'negro, cafe','codmascota_cliente'=>4,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Shagi','peso'=>'10.01','raza'=>'pastor Aleman','codCliente1'=>'1'],
            ['color'=>'negro, cafe','codmascota_cliente'=>7,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Shagi','peso'=>'10.01','raza'=>'pastor Aleman','codCliente1'=>'1'],
            ['color'=>'negro, cafe','codmascota_cliente'=>8,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Shagi','peso'=>'10.01','raza'=>'pastor Aleman','codCliente1'=>'1'],
            ['color'=>'negro, cafe','codmascota_cliente'=>12,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Shagi','peso'=>'10.01','raza'=>'pastor Aleman','codCliente1'=>'1'],
            ['color'=>'negro, cafe','codmascota_cliente'=>13,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Shagi','peso'=>'10.01','raza'=>'pastor Aleman','codCliente1'=>'1'],
            ['color'=>'negro, cafe','codmascota_cliente'=>14,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Shagi','peso'=>'10.01','raza'=>'pastor Aleman','codCliente1'=>'1'],
            ['color'=>'negro, cafe','codmascota_cliente'=>17,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Shagi','peso'=>'10.01','raza'=>'pastor Aleman','codCliente1'=>'1'],
            ['color'=>'negro, cafe','codmascota_cliente'=>19,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Shagi','peso'=>'10.01','raza'=>'pastor Aleman','codCliente1'=>'1'],
            ['color'=>'negro, cafe','codmascota_cliente'=>21,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Shagi','peso'=>'10.01','raza'=>'pastor Aleman','codCliente1'=>'1'],
            ['color'=>'negro, cafe','codmascota_cliente'=>22,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Shagi','peso'=>'10.01','raza'=>'pastor Aleman','codCliente1'=>'1'],
            ['color'=>'negro, cafe','codmascota_cliente'=>24,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Shagi','peso'=>'10.01','raza'=>'pastor Aleman','codCliente1'=>'1'],
            ['color'=>'negro, cafe','codmascota_cliente'=>26,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Shagi','peso'=>'10.01','raza'=>'pastor Aleman','codCliente1'=>'1'],
            ['color'=>'negro, cafe','codmascota_cliente'=>29,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Shagi','peso'=>'10.01','raza'=>'pastor Aleman','codCliente1'=>'1'],
            ['color'=>'cafe','codmascota_cliente'=>33,'especie'=>'canino','fechaNacimiento'=>'04-04-2012','genero'=>'H','nombre'=>'misha','peso'=>'09.10','raza'=>'mestizo','codCliente1'=>'1'],
            ['color'=>'cafe','codmascota_cliente'=>36,'especie'=>'canino','fechaNacimiento'=>'04-04-2012','genero'=>'H','nombre'=>'misha','peso'=>'09.10','raza'=>'mestizo','codCliente1'=>'1'],
            ['color'=>'cafe','codmascota_cliente'=>37,'especie'=>'canino','fechaNacimiento'=>'04-04-2012','genero'=>'H','nombre'=>'misha','peso'=>'09.10','raza'=>'mestizo','codCliente1'=>'1'],
            ['color'=>'cafe','codmascota_cliente'=>44,'especie'=>'canino','fechaNacimiento'=>'04-04-2012','genero'=>'H','nombre'=>'misha','peso'=>'09.10','raza'=>'mestizo','codCliente1'=>'1'],
            ['color'=>'cafe','codmascota_cliente'=>46,'especie'=>'canino','fechaNacimiento'=>'04-04-2012','genero'=>'H','nombre'=>'misha','peso'=>'09.10','raza'=>'mestizo','codCliente1'=>'1'],
            ['color'=>'cafe','codmascota_cliente'=>48,'especie'=>'canino','fechaNacimiento'=>'04-04-2012','genero'=>'H','nombre'=>'misha','peso'=>'09.10','raza'=>'mestizo','codCliente1'=>'1']            
        ];
        foreach ($mascotas as $key => $mascota) {
            Mascota::create($mascota);
        }
    }
}