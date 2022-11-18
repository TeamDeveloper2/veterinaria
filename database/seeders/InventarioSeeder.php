<?php

namespace Database\Seeders;

use App\Models\inventario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $invs=[
            ['codigoProducto'=>'VET-001','nombreItem'=>'Pararacetamol','precio'=>'0.50','detalle'=>'pildora','fecha'=>'10-11-2022','cantidadAnterior'=>'10','cantidadActual'=>'30','cantidadSalida'=>'0','cantidadTotal'=>'15','fecha_vencimiento'=>'10-12-2022','codUser'=>'1'],
            ['codigoProducto'=>'VET-002','nombreItem'=>'dogPulg','precio'=>'2.50','detalle'=>'pildora','fecha'=>'10-11-2022','cantidadAnterior'=>'10','cantidadActual'=>'30','cantidadSalida'=>'0','cantidadTotal'=>'15','fecha_vencimiento'=>'10-12-2022','codUser'=>'1'],
            ['codigoProducto'=>'VET-003','nombreItem'=>'Sasterum','precio'=>'10.50','detalle'=>'Crema','fecha'=>'10-11-2022','cantidadAnterior'=>'10','cantidadActual'=>'30','cantidadSalida'=>'0','cantidadTotal'=>'15','fecha_vencimiento'=>'10-12-2022','codUser'=>'1'],
            ['codigoProducto'=>'VET-004','nombreItem'=>'Pararacet','precio'=>'2.0','detalle'=>'pildora','fecha'=>'10-11-2022','cantidadAnterior'=>'10','cantidadActual'=>'30','cantidadSalida'=>'0','cantidadTotal'=>'15','fecha_vencimiento'=>'10-12-2022','codUser'=>'1'],
            ['codigoProducto'=>'VET-005','nombreItem'=>'Endog 100mg','precio'=>'1.20','detalle'=>'pildora','fecha'=>'10-11-2022','cantidadAnterior'=>'10','cantidadActual'=>'30','cantidadSalida'=>'0','cantidadTotal'=>'15','fecha_vencimiento'=>'10-12-2022','codUser'=>'1'],
            ['codigoProducto'=>'VET-006','nombreItem'=>'Endog 500mg','precio'=>'1.90','detalle'=>'pildora','fecha'=>'10-11-2022','cantidadAnterior'=>'10','cantidadActual'=>'30','cantidadSalida'=>'0','cantidadTotal'=>'15','fecha_vencimiento'=>'10-12-2022','codUser'=>'1'],
            ['codigoProducto'=>'VET-007','nombreItem'=>'AntiVirradica 50mg','precio'=>'2.30','detalle'=>'Solucion Salina','fecha'=>'10-11-2022','cantidadAnterior'=>'10','cantidadActual'=>'30','cantidadSalida'=>'0','cantidadTotal'=>'15','fecha_vencimiento'=>'10-12-2022','codUser'=>'1'],
            ['codigoProducto'=>'VET-008','nombreItem'=>'Engystol 10mg','precio'=>'0.20','detalle'=>'pildora','fecha'=>'10-11-2022','cantidadAnterior'=>'10','cantidadActual'=>'30','cantidadSalida'=>'0','cantidadTotal'=>'15','fecha_vencimiento'=>'10-12-2022','codUser'=>'1'],
            ['codigoProducto'=>'VET-009','nombreItem'=>'Frintogil 50mg','precio'=>'0.30','detalle'=>'pildora','fecha'=>'10-11-2022','cantidadAnterior'=>'10','cantidadActual'=>'30','cantidadSalida'=>'0','cantidadTotal'=>'15','fecha_vencimiento'=>'10-12-2022','codUser'=>'1'],
            ['codigoProducto'=>'VET-010','nombreItem'=>'Surex','precio'=>'25.0','detalle'=>'suero','fecha'=>'10-11-2022','cantidadAnterior'=>'10','cantidadActual'=>'30','cantidadSalida'=>'0','cantidadTotal'=>'15','fecha_vencimiento'=>'10-12-2022','codUser'=>'1'],
            ['codigoProducto'=>'VET-011','nombreItem'=>'VitamixB','precio'=>'15.50','detalle'=>'pildora','fecha'=>'10-11-2022','cantidadAnterior'=>'10','cantidadActual'=>'30','cantidadSalida'=>'0','cantidadTotal'=>'15','fecha_vencimiento'=>'10-12-2022','codUser'=>'1'],
            ['codigoProducto'=>'VET-012','nombreItem'=>'Complexi','precio'=>'10.50','detalle'=>'suero','fecha'=>'10-11-2022','cantidadAnterior'=>'10','cantidadActual'=>'30','cantidadSalida'=>'0','cantidadTotal'=>'15','fecha_vencimiento'=>'10-12-2022','codUser'=>'1'],
            ['codigoProducto'=>'VET-013','nombreItem'=>'Rontegil','precio'=>'2.50','detalle'=>'suero','fecha'=>'10-11-2022','cantidadAnterior'=>'10','cantidadActual'=>'30','cantidadSalida'=>'0','cantidadTotal'=>'15','fecha_vencimiento'=>'10-12-2022','codUser'=>'1'],
            //----------------------------------------------------------------
            ['codigoProducto'=>'NOR-001','nombreItem'=>'Shampoo antipulgas','precio'=>'20.00','detalle'=>'Cosmetico','fecha'=>'10-11-2022','cantidadAnterior'=>'10','cantidadActual'=>'30','cantidadSalida'=>'0','cantidadTotal'=>'15','codUser'=>'1'],
            ['codigoProducto'=>'NOR-002','nombreItem'=>'Peine AntiPulgas','precio'=>'10.50','detalle'=>'Cosmetico','fecha'=>'10-11-2022','cantidadAnterior'=>'10','cantidadActual'=>'30','cantidadSalida'=>'0','cantidadTotal'=>'15','codUser'=>'1'],
            ['codigoProducto'=>'NOR-003','nombreItem'=>'Peine Sencillo','precio'=>'5.00','detalle'=>'Cosmetico','fecha'=>'10-11-2022','cantidadAnterior'=>'10','cantidadActual'=>'30','cantidadSalida'=>'0','cantidadTotal'=>'15','codUser'=>'1'],
            ['codigoProducto'=>'NOR-004','nombreItem'=>'Balon Juego','precio'=>'10.00','detalle'=>'Cosmetico','fecha'=>'10-11-2022','cantidadAnterior'=>'10','cantidadActual'=>'30','cantidadSalida'=>'0','cantidadTotal'=>'15','codUser'=>'1'],
            ['codigoProducto'=>'NOR-005','nombreItem'=>'Jaula Transporte Gato Pequeña','precio'=>'50.00','detalle'=>'Cosmetico','fecha'=>'10-11-2022','cantidadAnterior'=>'10','cantidadActual'=>'30','cantidadSalida'=>'0','cantidadTotal'=>'12','codUser'=>'1'],
            //----------------------------------------------------------------
            ['codigoProducto'=>'OPE-001','nombreItem'=>'Jeringas','precio'=>'2.00','detalle'=>'Utensilios','fecha'=>'10-11-2022','cantidadAnterior'=>'10','cantidadActual'=>'30','cantidadSalida'=>'0','cantidadTotal'=>'15','codUser'=>'1'],
            ['codigoProducto'=>'OPE-002','nombreItem'=>'Pinzas','precio'=>'8.50','detalle'=>'Utensilios','fecha'=>'10-11-2022','cantidadAnterior'=>'10','cantidadActual'=>'30','cantidadSalida'=>'0','cantidadTotal'=>'15','codUser'=>'1'],
            //------------------------------
            ['codigoProducto'=>'AL-001','nombreItem'=>'comidaPerro 1kg Dogi','precio'=>'8.50','detalle'=>'Alimentos','fecha'=>'10-11-2022','cantidadAnterior'=>'10','cantidadActual'=>'30','cantidadSalida'=>'0','cantidadTotal'=>'15','fecha_vencimiento'=>'15-12-2022','codUser'=>'1'],
            ['codigoProducto'=>'AL-002','nombreItem'=>'comidaGato 1kg Gat','precio'=>'8.50','detalle'=>'Alimentos','fecha'=>'10-11-2022','cantidadAnterior'=>'10','cantidadActual'=>'30','cantidadSalida'=>'0','cantidadTotal'=>'15','fecha_vencimiento'=>'15-12-2022','codUser'=>'1'],
        ];
        foreach ($invs as $key => $inv) {
            inventario::create($inv);
        }
    }
}
