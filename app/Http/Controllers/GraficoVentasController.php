<?php

namespace App\Http\Controllers;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use App\Models\venta;
use App\Models\inventario;
use App\Models\ventacliente;
use App\Models\devoluciones;
use Illuminate\Http\Request;

class GraficoVentasController extends Controller
{
    public function index(){
        $chart_options = [
            'chart_title' => 'Users by months',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\ventacliente',
            'group_by_field' => 'nombre_cliente',
            'group_by_period' => 'day',
            'chart_type' => 'bar',
            
           
            //'filter_days' => 30, // show only transactions for last 30 days
            //'filter_period' => 'week', // show only transactions for this week
        ];
        $chart = new LaravelChart($chart_options);
        
        return view('Graficas.GraficoVentas', compact('chart'));
        

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
