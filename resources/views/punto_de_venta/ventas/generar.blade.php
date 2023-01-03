@extends('layouts.master')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Generar Venta</h2>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row" >
        <div class="col-lg-12">
            <div class="ibox ">

                <div class="ibox-content">
                    <form action="/admin/reservarCliente_post" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 m-b-xs">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nombre de Cliente:<i class="text-danger">*</i></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nombre_cliente" value="" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 m-b-xs">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">CI / NIT:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nit" value="">
                                    </div>
                                </div>
                            </div>                                                       
                        </div>

                        <div class="row">
                            <div class="col-sm-6 m-b-xs">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Cantidad de Productos<i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" name="cantidad_articulos" value="" required="">
                                    </div>
                                </div>
                            </div> 
                            <div class="col-sm-6 m-b-xs">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Fecha:<i class="text-danger">*</i></label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="fecha_reserva" value="{{ date('Y-m-d') }}" readonly>
                                        <input type="text" class="form-control" name="estado_cliente" value="reservado" hidden>
                                    </div>
                                </div>
                            </div>                         
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-success " type="submit">Generar</button>
                                <a href="{{route('ventas_index')}}" class="btn btn-danger">Cancelar</a>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@stop