@extends('layouts.master')
@section('content')
<div class="container py-5 text-center ">
    <h1 class="mb-4">Reporte de citas</h1>
    <div class="row">
        <div class="col-xl-12 text-right">

            </div>

                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Reporte PDF
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <li><a class="dropdown-item" href="{{ route('reporte-cita.pdf1') }}">Reporte Completo</a></li>
                        <li><a class="dropdown-item" href="{{ route('reporte-cita.pdf2') }}">Reporte Semana Pasada </a></li>
                        <li><a class="dropdown-item" href="{{ route('reporte-cita.pdf3') }}">Reporte Mes Pasado</a></li>
                        
                        </ul>   
                    </div>

                    <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Reportes Exel
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <li><a class="dropdown-item" href="">Proximos a vencer</a></li>
                        <li><a class="dropdown-item" href="">Reportes por stock</a></li>
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
                    <h5 class="card-title font-weight-bold">Reporte de Citas</h4>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID Cliente</th>
                                <th>Cliente</th>
                                <th>Mascota</th>
                                <th>Motivo</th>
                                <th>Telefono</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($getdatoslista as $dato)
                            <tr>
                                <th>{{$contador++}}</th>
                                <td>{{$dato->id}}</td>
                                <td>{{$dato->name}}</td>
                                <td>{{$dato->nombre_mascota}}</td>
                                <td>{{$dato->motivo}}</td>
                                <td>{{$dato->telefono}}</td>
                                <td>{{$dato->fecha}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
</div>
@stop