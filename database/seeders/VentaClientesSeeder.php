<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ventacliente;

class VentaClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ventaclientes=[
            ["nombre_cliente"=>"Roman","nit"=>16145706,"fecha_reserva"=>"2022-05-02","estado_cliente"=>"confirmado","cantidad_articulos"=>1],
            ["nombre_cliente"=>"Conney","nit"=>17027104,"fecha_reserva"=>"2022-05-06","estado_cliente"=>"confirmado","cantidad_articulos"=>3],
            ["nombre_cliente"=>"Wyatan","nit"=>16772418,"fecha_reserva"=>"2022-08-13","estado_cliente"=>"confirmado","cantidad_articulos"=>3],
            ["nombre_cliente"=>"Timmie","nit"=>11961313,"fecha_reserva"=>"2022-04-04","estado_cliente"=>"confirmado","cantidad_articulos"=>4],
            ["nombre_cliente"=>"Em","nit"=>13268404,"fecha_reserva"=>"2022-11-16","estado_cliente"=>"confirmado","cantidad_articulos"=>1],
            ["nombre_cliente"=>"Lev","nit"=>10017201,"fecha_reserva"=>"2022-06-17","estado_cliente"=>"confirmado","cantidad_articulos"=>4],
            ["nombre_cliente"=>"Margaretta","nit"=>16806846,"fecha_reserva"=>"2022-01-17","estado_cliente"=>"confirmado","cantidad_articulos"=>2],
            ["nombre_cliente"=>"Kalie","nit"=>11377286,"fecha_reserva"=>"2022-07-01","estado_cliente"=>"confirmado","cantidad_articulos"=>1],
            ["nombre_cliente"=>"Kean","nit"=>11113505,"fecha_reserva"=>"2022-07-19","estado_cliente"=>"confirmado","cantidad_articulos"=>3],
            ["nombre_cliente"=>"Roseann","nit"=>13302048,"fecha_reserva"=>"2022-05-25","estado_cliente"=>"confirmado","cantidad_articulos"=>4],
            ["nombre_cliente"=>"Lyon","nit"=>12773327,"fecha_reserva"=>"2022-01-19","estado_cliente"=>"confirmado","cantidad_articulos"=>1],
            ["nombre_cliente"=>"Hester","nit"=>13234183,"fecha_reserva"=>"2022-04-12","estado_cliente"=>"confirmado","cantidad_articulos"=>1],
            ["nombre_cliente"=>"Wynne","nit"=>11220032,"fecha_reserva"=>"2022-10-31","estado_cliente"=>"confirmado","cantidad_articulos"=>2],
            ["nombre_cliente"=>"Johannes","nit"=>16807774,"fecha_reserva"=>"2022-08-19","estado_cliente"=>"confirmado","cantidad_articulos"=>3],
            ["nombre_cliente"=>"Oren","nit"=>13572678,"fecha_reserva"=>"2022-06-06","estado_cliente"=>"confirmado","cantidad_articulos"=>4],
            ["nombre_cliente"=>"Beatriz","nit"=>11018864,"fecha_reserva"=>"2022-05-09","estado_cliente"=>"confirmado","cantidad_articulos"=>3],
            ["nombre_cliente"=>"Dale","nit"=>17613970,"fecha_reserva"=>"2022-06-01","estado_cliente"=>"confirmado","cantidad_articulos"=>3],
            ["nombre_cliente"=>"Mandie","nit"=>14336197,"fecha_reserva"=>"2022-11-10","estado_cliente"=>"confirmado","cantidad_articulos"=>4],
            ["nombre_cliente"=>"Salomo","nit"=>19147490,"fecha_reserva"=>"2022-09-14","estado_cliente"=>"confirmado","cantidad_articulos"=>1],
            ["nombre_cliente"=>"Barty","nit"=>14295258,"fecha_reserva"=>"2022-02-28","estado_cliente"=>"confirmado","cantidad_articulos"=>1]
        ];

        foreach ($ventaclientes as $key => $itemventaclientes) {
            ventacliente::create($itemventaclientes);
        }
    }
}
