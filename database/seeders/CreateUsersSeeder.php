<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
           /*  [
                'name'=>'Admin User',
                'apePaterno'=>'root',
                'apeMaterno'=>'root',
                'fechNacimiento'=>'2022-08-20',
                'Genero'=>'Masculino',
                'Nacionalidad'=>'Bolivia',                
                'email'=>'admin@gmail.com',
                'type'=>1,
                'password'=> bcrypt('123456'),
            ], */
            [
                'name'=>'Nelson Fabian',
                'apePaterno'=>'Galvan',
                'apeMaterno'=>'Vega',
                'fechNacimiento'=>'2022-08-20',
                'Genero'=>'Masculino',
                'Nacionalidad'=>'Bolivia',
                'email'=>'client@gmail.com',
                'type'=> 2,
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Armando Paredes',
                'apePaterno'=>'Colque',
                'apeMaterno'=>'Mamani',
                'fechNacimiento'=>'2022-08-20',
                'Genero'=>'Masculino',
                'Nacionalidad'=>'Bolivia',
                'email'=>'armando@gmail.com',
                'type'=> 2,
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Matias',
                'apePaterno'=>'Cespedez',
                'apeMaterno'=>'Milagros',
                'fechNacimiento'=>'2022-08-20',
                'Genero'=>'Masculino',
                'Nacionalidad'=>'Bolivia',
                'email'=>'matias@gmail.com',
                'type'=> 2,
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Plinio',
                'apePaterno'=>'Castellanos',
                'apeMaterno'=>'Belda',
                'fechNacimiento'=>'2022-08-20',
                'Genero'=>'Masculino',
                'Nacionalidad'=>'Bolivia',
                'email'=>'plinio@gmail.com',
                'type'=> 2,
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Édgar',
                'apePaterno'=>'Riquelme',
                'apeMaterno'=>'Llamas',
                'fechNacimiento'=>'2022-08-20',
                'Genero'=>'Masculino',
                'Nacionalidad'=>'Bolivia',
                'email'=>'edgar@gmail.com',
                'type'=> 2,
                'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}