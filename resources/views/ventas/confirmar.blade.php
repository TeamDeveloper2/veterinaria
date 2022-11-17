@extends('layouts.master')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Confirmar Venta</h2>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row" >
        <div class="col-lg-12">
            <div class="ibox ">

                <div class="ibox-content">
                    <form name="" action="/admin/confirmarVenta_put" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-sm-6 m-b-xs">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">codigo venta:<i class="text-danger">*</i></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$cliente->id_ventacliente}}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nombre de Cliente:<i class="text-danger">*</i></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nombre_cliente" value="{{$cliente->nombre_cliente}}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 m-b-xs">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">CI / NIT:<i class="text-danger">*</i></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nit" value="{{$cliente->nit}}" required="" disabled>
                                    </div>
                                </div>                                                                                                    
                            </div>                                                       
                        </div>

                        <div class="row">                            
                            <div class="col-sm-6 m-b-xs">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Fecha:<i class="text-danger">*</i></label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="fecha" value="{{date('Y-m-d')}}" disabled>
                                    </div>
                                </div>
                            </div>                           
                        </div>                                                                        

                        <table class="table table-bordered">
                            
                            <thead>
                                <tr>
                                    <th>#</th>                                    
                                    <th>Codigo Producto</th>
                                    <th>Nombre Producto</th>
                                    <th>Cantidad</th>
                                    <th>Peso</th>
                                    <th>Precio unitario</th>
                                    <th>Precio total</th>
                                </tr>
                            </thead>
                            <tbody>                            

                            @foreach ($venta as $ventaitem)                                                            
                                    <tr>
                                        <td>{{$enum++}}</td>
                                        <td>{{$ventaitem->cod_producto}}</td>
                                        <td>{{$ventaitem->nombreItem}}</td>
                                        <td>{{$ventaitem->cantidad_articulo}}</td>
                                        <td>{{$ventaitem->cantidad_kilo}}</td>
                                        <td>{{$ventaitem->precio}}</td>
                                        <td><input type="text" name="precio_total[]" value="reservado" hidden>{{$ventaitem->precio * $ventaitem->cantidad_articulo}}</td>
                                        <td style="visibility:collapse; display:none;">{{@$totalPagar= $totalPagar + ($ventaitem->precio * $ventaitem->cantidad_articulo)}}</td>
                                    </tr>                                    
                            @endforeach
                            </tbody>    
                        </table>

                        <div class="col-sm-6 m-b-xs">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Total A Pagar:<i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{@$totalPagar}} Bs" disabled>
                                    </div>
                                </div>
                        </div>
                        <input type="text" class="form-control" name="estado_venta" value="confirmado" hidden>
                        <input type="text" class="form-control" name="estado_cliente" value="confirmado" hidden>
                        <div class="form-group row">
                            <div class="col-sm-10 col-sm-offset-2">
                                <button class="btn btn-success " type="submit">Confirmar Venta</button>
                                <button class="btn btn-danger " type="button" onclick="">Cancelar</button>                               
                            </div>
                        </div>
                    </form>                                                                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection