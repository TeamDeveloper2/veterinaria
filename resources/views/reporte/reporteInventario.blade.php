@extends('layouts.master')


@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Reporte de Inventario</h2>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row" >
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <a class="btn btn-primary" href='{{route('pdf')}}}''>Exportar a PDF</a>
                    <div class="ibox-tools"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></div>

                    <a class="btn btn-primary" href=>Exportar a XLS</a>
                    <div class="ibox-tools"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></div>

                    <a class="btn btn-primary" href=>Exportar a HTML</a>
                    <div class="ibox-tools"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></div>
                </div>
                <div class="ibox-content">
                    <form name="formBuscar" action="" method="get">
                        <div class="row">
                            <div class="col-sm-3 m-b-xs">
                                <div class="-group">
                                    <input placeholder="Buscar" type="text" class="form-control form-control-sm" name="buscar" value="">
                                    <span class="-group-append"> <button type="submit" class="btn btn-sm btn-success">Buscar</button> </span>
                                </div>
                            </div>
                            <div class="col-sm-7 m-b-xs" >&nbsp;</div>
                            <div class="col-sm-2 m-b-xs" style="float: right;"></div>
                        </div>
                    </form>
                    <div class="row"><div class="col-sm-12 m-b-xs"><span class="text-success">Total: <strong>{{$i}}</strong></span></div></div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre del Producto </th>
                                <th>Fecha de Ingreso</th>
                                <th>Fecha de Vencimiento</th>
                                <th>Cantidad Inicial</th>
                                <th>Cantidad Final</th>
                                <th>Precio</th>


                            </tr>
                        </thead>
                        <tbody>

                            @foreach ( $inv as $inv)


                                <tr class="row100 head">
                                    <th scope="row">{{$inv->codigoProducto}} </th>
                                    <td > {{$inv->nombreItem}} </td>
                                    <td > {{$inv->fecha}}</td>
                                    <td > {{$inv->fecha_vencimiento}} </td>
                                    <td > {{$inv->cantidadActual}}</td>
                                    <td > {{$inv->cantidadTotal}} </td>
                                    <td > {{$inv->precio}} </td>

                                    @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
