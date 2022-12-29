<?php

namespace App\Http\Controllers;
use App\Models\venta;
use App\Models\inventario;
use App\Models\ventacliente;
use App\Models\devoluciones;
use Illuminate\Http\Request;

class ReporteVentaController extends Controller
{
    //$listaventa
    public function index()
    {
        $enum = 1;
        $listaventa = $this->listaventas();        
        return view('VentaReportes.index', compact('listaventa','enum'));
    }







    /*******************************************************************/
    /****************** FUNCIONES RECURRENTES **************************/
    /*******************************************************************/
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
