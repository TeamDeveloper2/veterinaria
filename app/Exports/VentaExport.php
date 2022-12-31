<?php

namespace App\Exports;
use App\Models\venta;
use App\Models\inventario;
use App\Models\ventacliente;
use Illuminate\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class ventaExport implements FromView, ShouldAutoSize
{
    
    public function view(): View
    {
        return view('VentaReportes.excel1', [
            'listaventa'=> venta::select()
            ->where('estado_venta', '=', 'confirmado')
            ->join('ventaclientes', 'ventaclientes.id_ventacliente', '=', 'idcliente_idventa')
            ->join('inventarios', 'inventarios.codigoProducto', '=', 'cod_producto')->orderBy('fecha_venta', 'desc')->get()
        ]);
    }












    function ultimoCliente(){
        return ventacliente::get()->last();
    }

    function ultimasventas(){
        return venta::select()->where('estado_venta', '=', 'reservado')->join('inventarios', 'inventarios.codigoProducto', '=', 'cod_producto')->get();
    }    

    function inventarioventa(){
        return inventario::select()->join('ventas', 'ventas.cod_producto', 'codigoProducto')->get();
    }

    function listaventas(){
        return venta::select()
        ->where('estado_venta', '=', 'confirmado')
        ->join('ventaclientes', 'ventaclientes.id_ventacliente', '=', 'idcliente_idventa')
        ->join('inventarios', 'inventarios.codigoProducto', '=', 'cod_producto')->orderBy('fecha_venta', 'desc')->get();
    }   

}

