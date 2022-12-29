@extends('layouts.master')
@section('content')
<div class="container py-5 text-center ">
    <h1 class="mb-4">Reporte de venta</h1>
    <div class="row">
        <div class="col-xl-12 text-right">

            </div>

                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Reporte PDF
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <li><a class="dropdown-item" href="{{ route('reporte-venta.pdf1') }}">Proximos a vencer</a></li>
                        <li><a class="dropdown-item" href="{{ route('reporte-venta.pdf2') }}">Reporte por stock </a></li>
                        </ul>   
                    </div>

                    <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Reportes Exel
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <li><a class="dropdown-item" href="{{ route('reporte-venta.export') }}">Proximos a vencer</a></li>
                        <li><a class="dropdown-item" href="{{ route('reporte-venta.export2') }}">Reportes por stock</a></li>
                    </ul>
                    </div>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Reportes HTML
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <li><a class="btn btn-primary" onclick="window.print() ">Exportar a HTML</a></li>
                        </ul>
                        </div>
                    </select>
                            
                   
       
                </div>




                </div>
            
            </div>
       
 
            <div class="card mt-4">
                <div class="card-header">
                    <h5 class="card-title font-weight-bold">Reportes de Ventas</h4>
                </div>

                <div class="card-body">
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
                                
                            </tr>
                        @endforeach 
                        </tbody>

                    </table>
                </div>
         
</div>
@stop