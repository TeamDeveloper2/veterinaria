<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\venta;

class VentasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ventas=[
            ["idcliente_idventa"=>1,'cod_producto'=>'VET-001','cantidad_articulo'=>1,'cantidad_kilo'=>0,'fecha_venta'=>'10-11-2022','estado_venta'=>'confirmado'],            

            ["idcliente_idventa"=>2,'cod_producto'=>'VET-002','cantidad_articulo'=>1,'cantidad_kilo'=>0,'fecha_venta'=>"2022-05-06",'estado_venta'=>'confirmado'],
            ["idcliente_idventa"=>2,'cod_producto'=>'VET-003','cantidad_articulo'=>1,'cantidad_kilo'=>0,'fecha_venta'=>"2022-05-06",'estado_venta'=>'confirmado'],
            ["idcliente_idventa"=>2,'cod_producto'=>'VET-004','cantidad_articulo'=>1,'cantidad_kilo'=>0,'fecha_venta'=>"2022-05-06",'estado_venta'=>'confirmado'],

            ["idcliente_idventa"=>3,'cod_producto'=>'VET-001','cantidad_articulo'=>1,'cantidad_kilo'=>0,'fecha_venta'=>"2022-08-13",'estado_venta'=>'confirmado'],
            ["idcliente_idventa"=>3,'cod_producto'=>'VET-004','cantidad_articulo'=>1,'cantidad_kilo'=>0,'fecha_venta'=>"2022-08-13",'estado_venta'=>'confirmado'],
            ["idcliente_idventa"=>3,'cod_producto'=>'VET-005','cantidad_articulo'=>1,'cantidad_kilo'=>0,'fecha_venta'=>"2022-08-13",'estado_venta'=>'confirmado'],
            
            ["idcliente_idventa"=>4,'cod_producto'=>'VET-002','cantidad_articulo'=>1,'cantidad_kilo'=>0,'fecha_venta'=>"2022-04-04",'estado_venta'=>'confirmado'],
            ["idcliente_idventa"=>4,'cod_producto'=>'VET-004','cantidad_articulo'=>1,'cantidad_kilo'=>0,'fecha_venta'=>"2022-04-04",'estado_venta'=>'confirmado'],
            ["idcliente_idventa"=>4,'cod_producto'=>'VET-006','cantidad_articulo'=>1,'cantidad_kilo'=>0,'fecha_venta'=>"2022-04-04",'estado_venta'=>'confirmado'],
            ["idcliente_idventa"=>4,'cod_producto'=>'VET-008','cantidad_articulo'=>1,'cantidad_kilo'=>0,'fecha_venta'=>"2022-04-04",'estado_venta'=>'confirmado'],

            ["idcliente_idventa"=>5,'cod_producto'=>'VET-002','cantidad_articulo'=>1,'cantidad_kilo'=>0,'fecha_venta'=>"2022-11-16",'estado_venta'=>'confirmado'],

            ["idcliente_idventa"=>6,'cod_producto'=>'VET-008','cantidad_articulo'=>4,'cantidad_kilo'=>0,'fecha_venta'=>"2022-06-17",'estado_venta'=>'confirmado'],

            ["idcliente_idventa"=>7,'cod_producto'=>'VET-008','cantidad_articulo'=>2,'cantidad_kilo'=>0,'fecha_venta'=>"2022-01-17",'estado_venta'=>'confirmado'],

            ["idcliente_idventa"=>8,'cod_producto'=>'VET-010','cantidad_articulo'=>1,'cantidad_kilo'=>0,'fecha_venta'=>"2022-07-01",'estado_venta'=>'confirmado'],

            ["idcliente_idventa"=>9,'cod_producto'=>'VET-010','cantidad_articulo'=>3,'cantidad_kilo'=>0,'fecha_venta'=>"2022-07-19",'estado_venta'=>'confirmado'],

            ["idcliente_idventa"=>10,'cod_producto'=>'VET-001','cantidad_articulo'=>2,'cantidad_kilo'=>0,'fecha_venta'=>"2022-05-25",'estado_venta'=>'confirmado'],
            ["idcliente_idventa"=>10,'cod_producto'=>'VET-011','cantidad_articulo'=>2,'cantidad_kilo'=>0,'fecha_venta'=>"2022-05-25",'estado_venta'=>'confirmado'],

            ["idcliente_idventa"=>11,'cod_producto'=>'VET-005','cantidad_articulo'=>1,'cantidad_kilo'=>0,'fecha_venta'=>"2022-01-19",'estado_venta'=>'confirmado'],

            ["idcliente_idventa"=>12,'cod_producto'=>'VET-006','cantidad_articulo'=>1,'cantidad_kilo'=>0,'fecha_venta'=>"2022-04-12",'estado_venta'=>'confirmado'],

            ["idcliente_idventa"=>13,'cod_producto'=>'VET-007','cantidad_articulo'=>2,'cantidad_kilo'=>0,'fecha_venta'=>"2022-10-31",'estado_venta'=>'confirmado'],

            ["idcliente_idventa"=>14,'cod_producto'=>'VET-013','cantidad_articulo'=>3,'cantidad_kilo'=>0,'fecha_venta'=>"2022-08-19",'estado_venta'=>'confirmado'],

            ["idcliente_idventa"=>15,'cod_producto'=>'VET-013','cantidad_articulo'=>2,'cantidad_kilo'=>0,'fecha_venta'=>"2022-06-06",'estado_venta'=>'confirmado'],
            ["idcliente_idventa"=>15,'cod_producto'=>'VET-012','cantidad_articulo'=>2,'cantidad_kilo'=>0,'fecha_venta'=>"2022-06-06",'estado_venta'=>'confirmado'],

            ["idcliente_idventa"=>16,'cod_producto'=>'VET-005','cantidad_articulo'=>2,'cantidad_kilo'=>0,'fecha_venta'=>"2022-05-09",'estado_venta'=>'confirmado'],
            ["idcliente_idventa"=>16,'cod_producto'=>'VET-006','cantidad_articulo'=>1,'cantidad_kilo'=>0,'fecha_venta'=>"2022-05-09",'estado_venta'=>'confirmado'],

            ["idcliente_idventa"=>17,'cod_producto'=>'VET-007','cantidad_articulo'=>2,'cantidad_kilo'=>0,'fecha_venta'=>"2022-06-01",'estado_venta'=>'confirmado'],
            ["idcliente_idventa"=>17,'cod_producto'=>'VET-008','cantidad_articulo'=>1,'cantidad_kilo'=>0,'fecha_venta'=>"2022-06-01",'estado_venta'=>'confirmado'],

            ["idcliente_idventa"=>18,'cod_producto'=>'VET-011','cantidad_articulo'=>4,'cantidad_kilo'=>0,'fecha_venta'=>"2022-11-10",'estado_venta'=>'confirmado'],

            ["idcliente_idventa"=>19,'cod_producto'=>'VET-011','cantidad_articulo'=>1,'cantidad_kilo'=>0,'fecha_venta'=>"2022-09-14",'estado_venta'=>'confirmado'],

            ["idcliente_idventa"=>20,'cod_producto'=>'VET-011','cantidad_articulo'=>1,'cantidad_kilo'=>0,'fecha_venta'=>"2022-02-28",'estado_venta'=>'confirmado'],
        ];
        foreach ($ventas as $key => $itemventa) {
            venta::create($itemventa);
        }
    }
}
