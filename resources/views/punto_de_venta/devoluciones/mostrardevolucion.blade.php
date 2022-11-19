@extends('layouts.master')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Devolucion</h2>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row" >
        <div class="col-lg-12">
            <div class="ibox ">                
                <div class="ibox-content">                    
                    <form action="{{url('/admin/devoluciones_confrimada/')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 m-b-xs">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nombre de Cliente:<i class="text-danger">*</i></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="id_ventacliente" value="{{$getventaconfirmada->id_ventacliente}}" hidden>
                                        <input type="text" class="form-control" name="nombre_cliente" value="{{$getventaconfirmada->nombre_cliente}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 m-b-xs">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">CI / NIT:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nit" value="{{$getventaconfirmada->nit}}" readonly>
                                    </div>
                                </div>
                            </div>                                                       
                        </div>

                        <div class="row">                            
                            <div class="col-sm-6 m-b-xs">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Fecha de Venta:<i class="text-danger">*</i></label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="fecha_reserva" value="{{$getventaconfirmada->fecha_venta}}" readonly>
                                    </div>
                                </div>
                            </div>                         
                        </div>
                        <h1>DETALLES DEL PRODUCTO</h1>
                        <div class="row">
                            <div class="col-sm-6 m-b-xs">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Codigo Venta:<i class="text-danger">*</i></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="id_venta" value="{{$getventaconfirmada->id_venta}}" readonly>
                                    </div>
                                    <label class="col-sm-4 col-form-label">Cantidad de Articulos:<i class="text-danger">*</i></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="cantidad_articulo" value="{{$getventaconfirmada->cantidad_articulo}}" readonly>
                                    </div>
                                    <label class="col-sm-4 col-form-label">Codigo de Producto:<i class="text-danger">*</i></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="cod_producto" value="{{$getventaconfirmada->cod_producto}}" readonly>
                                    </div>
                                    <label class="col-sm-4 col-form-label">Nombre del Producto:<i class="text-danger">*</i></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nombreItem" value="{{$getventaconfirmada->nombreItem}}" readonly>                                        
                                    </div>
                                    <label class="col-sm-4 col-form-label">Fecha Devolucion:<i class="text-danger">*</i></label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="fecha_devolucion" value="{{date('Y-m-d')}}" readonly>
                                        <input type="text" class="form-control" name="estado_venta" value="devolucion" hidden>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-success " type="submit">Confirmar Devolucion</button>
                                <a class="btn btn-danger " href="{{route('ventas_index')}}">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection