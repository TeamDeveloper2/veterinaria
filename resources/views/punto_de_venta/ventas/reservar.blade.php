@extends('layouts.master')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Reservar Venta</h2>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row" >
        <div class="col-lg-12">
            <div class="ibox ">

                <div class="ibox-content">
                    <form action="/admin/reservarVentas" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 m-b-xs">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">codigo venta:<i class="text-danger">*</i></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$request->id_ventacliente}}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nombre de Cliente:<i class="text-danger">*</i></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$request->nombre_cliente}}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 m-b-xs">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">CI / NIT:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$request->nit}}" disabled>
                                    </div>
                                </div>
                            </div>                                                       
                        </div>

                        <div class="row">                            
                            <div class="col-sm-6 m-b-xs">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Fecha:<i class="text-danger">*</i></label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" value="{{ date('Y-m-d') }}" disabled>
                                    </div>
                                </div>
                            </div>                           
                        </div>

                        <datalist id="productos">
                            @foreach ($listaInventario as $item)
                            <option>{{$item->codigoProducto}}</option>
                            @endforeach                            
                        </datalist>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Cantidad en Kg</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i<$request->cantidad_articulos; $i++)
                                    <tr>
                                        <td>{{$cantidad = $i+1}}</td>                                        
                                        <td><input type="text" name="cod_producto[]" list="productos" required></td>
                                        <td><input type="number" name="cantidad_articulo[]" value="1"></td>
                                        <td><input type="number" name="cantidad_kilo[]" value="0"></td>
                                        <td><input type="date" name="fecha_venta[]" value="{{ date('Y-m-d') }}" hidden></td>                                        
                                        <td><input type="text" name="estado_venta[]" value="reservado" hidden></td>                                        
                                    </tr>                                
                                @endfor
                            </tbody>    
                        </table>

                        <div class="form-group row">
                            <div class="col-sm-10 col-sm-offset-2">
                                <button class="btn btn-success " type="submit">Reservar</button>
                                <a class="btn btn-danger " type="button" onclick="">Cancelar</a>
                                <a class="btn btn-primary " href="{{route('generar_ventas')}}">Modificar Cantidad de Productos</a>
                            </div>
                        </div>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>
@stop