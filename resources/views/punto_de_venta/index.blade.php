@extends('layouts.master')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Lista de Ventas</h2>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight"> 
    <div class="row" >
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <a class="btn btn-primary" href="{{route('generar_ventas')}}">Generar Venta</a>
                    <div class="ibox-tools"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></div>
                </div>
                <div class="ibox-content">
                    <form name="formBuscar" action="" method="get">
                        <div class="row">                            
                            <div class="col-sm-4 m-b-xs">
                                <div class="-group">
                                    
                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">Fecha de Compra</label>
            
                                        <div class="col-md-6">
                                            <input id="name" type="date" class="form-control" name="fecha" value="" required autocomplete="name" autofocus>
                                        </div>
                                   
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7 m-b-xs" >&nbsp;</div>
                            
                        </div>
                    </form>
                    <div class="row"><div class="col-sm-12 m-b-xs"><span class="text-success">Total: <strong>00</strong></span></div></div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>                                
                                <th>ID Venta</th>
                                <th>Nombre de Cliente</th>
                                <th>Codigo Producto</th>
                                <th>Nombre Producto</th>
                                <th>Cantidad Producto</th>
                                <th>Precio Unitario</th>
                                <th>Precio Total</th>
                                <th>Fecha</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listaventa as $itemventa)                                                    
                                <tr>
                                    <td>{{$enum++}}</td>                                                                        
                                    <td>{{$itemventa->id_venta}}</td>
                                    <td>{{$itemventa->nombre_cliente}}</td>
                                    <td>{{$itemventa->cod_producto}}</td>
                                    <td>{{$itemventa->nombreItem}}</td>
                                    <td>{{$itemventa->cantidad_articulo}}</td>
                                    <td>{{$itemventa->precio}}</td>
                                    <td>{{$itemventa->cantidad_articulo * $itemventa->precio}}</td>
                                    <td>{{$itemventa->fecha_venta}}</td>
                                    <td >                                        
                                        <a href="{{url('/admin/devoluciones/'.$itemventa->id_venta)}}" title="devolucion"><i class="fa fa-repeat" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection