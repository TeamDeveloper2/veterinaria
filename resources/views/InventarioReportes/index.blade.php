@extends('layouts.master')
@section('content')
<div class="container py-5 text-center ">
    <h1 class="mb-4">Reporte de inventario</h1>
    <div class="row">
        <div class="col-xl-12 text-right">
            </div>
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Reporte PDF
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <li><a class="dropdown-item" href="{{ route('reporte-inventario.pdf1') }}">Proximos a vencer</a></li>
                        <li><a class="dropdown-item" href="{{ route('reporte-inventario.pdf2') }}">Reporte por stock </a></li>
                        <li><a class="dropdown-item" href="{{ route('reporte-inventario.pdf3') }}">Reporte Completo </a></li>
                        </ul>   
                    </div>

                    <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Reportes Exel
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <li><a class="dropdown-item" href="{{ route('reporte-inventario.export') }}">Proximos a vencer</a></li>
                        <li><a class="dropdown-item" href="{{ route('reporte-inventario.export2') }}">Reportes por stock</a></li>
                        <li><a class="dropdown-item" href="{{ route('reporte-inventario.export3') }}">Reportes Completo</a></li>
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
                </div>  
            </div>
            <div class="card mt-4">
                <div class="card-header">
                    <h5 class="card-title font-weight-bold">Reportes de Inventarios</h4>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre del producto</th> 
                                <th>Fecha de ingreso</th>
                                <th>Fecha de vencimiento</th>
                                <th>Cantidad actual</th>
                                <th>Cantidad inicial</th>
                                <th>Precio</th>
                                
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($invs as $inv)
                                <tr>
                                    <td>{{$inv->codigoProducto}}</td>
                                    <td>{{ $inv->nombreItem }}</td>
                                    <td>{{ $inv->fecha }}</td>
                                    <td>{{ $inv->fecha_vencimiento }}</td>
                                    <td>{{ $inv->cantidadActual }}</td>
                                    <td>{{$inv->cantidadAnterior}}</td>
                                    <td>{{$inv->precio}}</td>
                                </tr>

                                @empty

                                @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
</div>
@stop