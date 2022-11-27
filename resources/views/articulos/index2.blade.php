@extends('layouts.master')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Lista de Medicamentos </h2>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row" >
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-content">
                    <br>
                     <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nro #</th>
                                <th>Codigo Articulo</th>
                                <th>Nombre </th>
                                <th>Detalle</th>
                                <th>Cantidad</th>
                                <th>Fecha</th>
                                <th>codigo Proveedor</th>
                                <th>Imagen</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($medic as $medic )
                            <tr class="row100 head">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{$medic->codigoProducto}}</td>
                                <td>{{$medic->nombreItem}}</td>
                                <td>{{$medic->detalle}}</td>
                                <td>{{$medic->cantidadActual}}</td>
                                <td>{{$medic->fecha_vencimiento}}</td>
                                @if ( $medic->codProvedor != null)
                                    <td>{{$medic->codProvedor}}</td>
                                @endif
                                    <td> Defecto </td>

                                <td>
                                    <img src="{{asset($medic->img)}}" alt="{{$medic->detalle}}" class="img-fluid img-thumbnail" width="100px">
                                </td>
                            @endforeach
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
