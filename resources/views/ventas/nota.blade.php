@extends('layouts.master')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Nota de Venta</h2>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row" >
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <a class="btn btn-primary" href="">Imprimir</a>
                    <div class="ibox-tools"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></div>
                </div>
                <div class="ibox-content">
                    <form name="formBuscar" action="" method="get">
                        <div class="row">
                            <div class="col-sm-6 m-b-xs">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nombre de Cliente:<i class="text-danger">*</i></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nombre" value="" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 m-b-xs">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">CI / NIT:<i class="text-danger">*</i></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nit" value="" required="">
                                    </div>
                                </div>
                            </div>
                           
                            
                        </div>

                        <div class="row">
                            <div class="col-sm-6 m-b-xs">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Total:<i class="text-danger">*</i></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="total" value="" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 m-b-xs">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Fecha:<i class="text-danger">*</i></label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="nit" value="" required="">
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        
                        <table class="table table-bordered">
                            
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>SKU</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>
                            <tbody>
    
                                    <tr>
                                        <td>prueba</td>
                                        <td>prueba</td>
                                        <td>prueba</td>
                                        <td>prueba</td>
                                        <td>prueba</td>
                                    </tr>
    
                            </tbody>
    
                        </table>


                        <div class="form-group row">
                            <div class="col-sm-10 col-sm-offset-2">
                               
                                <button class="btn btn-danger " type="button" onclick="">Volver</button>
                               
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@stop