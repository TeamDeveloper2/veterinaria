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
            ['color'=>'cafe','codmascota_cliente'=>1,'especie'=>'canino','fechaNacimiento'=>'04-04-2012','genero'=>'H','nombre'=>'misha','peso'=>'09.10','raza'=>'mestizo','codmascota_cliente'=>'1'],
            ['color'=>'cafe, cafe','codmascota_cliente'=>2,'especie'=>'Ave','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'cesar','peso'=>'10.01','raza'=>'pastor Aleman','codmascota_cliente'=>'2'],
            ['color'=>'negro, cafe','codmascota_cliente'=>2,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'firulay','peso'=>'10.01','raza'=>'pastor Aleman','codmascota_cliente'=>'19'],
            ['color'=>'negro, cafe','codmascota_cliente'=>3,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Rambo','peso'=>'10.01','raza'=>'pastor Aleman','codmascota_cliente'=>'3'],
            ['color'=>'negro, cafe','codmascota_cliente'=>4,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Shagi','peso'=>'10.01','raza'=>'pastor Aleman','codmascota_cliente'=>'4'],
            ['color'=>'gris, cafe','codmascota_cliente'=>7,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Shagi','peso'=>'10.01','raza'=>'pastor Aleman','codmascota_cliente'=>'20'],
            ['color'=>'negro, cafe','codmascota_cliente'=>8,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Shagi','peso'=>'10.01','raza'=>'pastor Aleman','codmascota_cliente'=>'21'],
            ['color'=>'negro, cafe','codmascota_cliente'=>12,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Ramiro','peso'=>'10.01','raza'=>'pastor Aleman','codmascota_cliente'=>'33'],
            ['color'=>'negro, cafe','codmascota_cliente'=>13,'especie'=>'Rata','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Taka','peso'=>'10.01','raza'=>'pastor Aleman','codmascota_cliente'=>'36'],
            ['color'=>'negro, cafe','codmascota_cliente'=>14,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Shagi','peso'=>'10.01','raza'=>'pastor Aleman','codmascota_cliente'=>'37'],
            ['color'=>'negro, gris','codmascota_cliente'=>17,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Pech','peso'=>'10.01','raza'=>'pastor Aleman','codmascota_cliente'=>'1'],
            ['color'=>'negro, cafe','codmascota_cliente'=>19,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Shagi','peso'=>'10.01','raza'=>'pastor Aleman','codmascota_cliente'=>'1'],
            ['color'=>'negro, cafe','codmascota_cliente'=>21,'especie'=>'Ganster','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Shagi','peso'=>'10.01','raza'=>'pastor Aleman','codmascota_cliente'=>'44'],
            ['color'=>'negro, cafe','codmascota_cliente'=>22,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Dogi','peso'=>'10.01','raza'=>'pastor Aleman','codmascota_cliente'=>'46'],
            ['color'=>'negro, manchas blancas','codmascota_cliente'=>24,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Shagi','peso'=>'10.01','raza'=>'pastor Aleman','codmascota_cliente'=>'48'],
            ['color'=>'negro, cafe','codmascota_cliente'=>26,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Shagi','peso'=>'10.01','raza'=>'pastor Aleman','codmascota_cliente'=>'1'],
            ['color'=>'negro, cafe','codmascota_cliente'=>29,'especie'=>'canino','fechaNacimiento'=>'04-10-2015','genero'=>'M','nombre'=>'Pan','peso'=>'10.01','raza'=>'pastor Aleman','codmascota_cliente'=>'26'],
            ['color'=>'cafe','codmascota_cliente'=>33,'especie'=>'canino','fechaNacimiento'=>'04-04-2012','genero'=>'H','nombre'=>'misha','peso'=>'09.10','raza'=>'mestizo','codmascota_cliente'=>'1'],
            ['color'=>'cafe','codmascota_cliente'=>36,'especie'=>'canino','fechaNacimiento'=>'04-04-2012','genero'=>'H','nombre'=>'misha','peso'=>'09.10','raza'=>'mestizo','codmascota_cliente'=>'29'],
            ['color'=>'cafe','codmascota_cliente'=>37,'especie'=>'Felino','fechaNacimiento'=>'04-04-2012','genero'=>'H','nombre'=>'Princesa','peso'=>'09.10','raza'=>'mestizo','codmascota_cliente'=>'17'],
            ['color'=>'cafe','codmascota_cliente'=>44,'especie'=>'Felino','fechaNacimiento'=>'04-04-2012','genero'=>'H','nombre'=>'Lisa','peso'=>'09.10','raza'=>'mestizo','codmascota_cliente'=>'14'],
            ['color'=>'cafe','codmascota_cliente'=>46,'especie'=>'canino','fechaNacimiento'=>'04-04-2012','genero'=>'H','nombre'=>'Mia','peso'=>'09.10','raza'=>'mestizo','codmascota_cliente'=>'13'],
            ['color'=>'cafe','codmascota_cliente'=>48,'especie'=>'canino','fechaNacimiento'=>'04-04-2012','genero'=>'H','nombre'=>'misha','peso'=>'09.10','raza'=>'mestizo','codmascota_cliente'=>'1']
        ];
        foreach ($mascotas as $key => $mascota) {
            Mascota::create($mascota);
        }
    }
}
