@extends('layouts.master')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Lista de Ventas</h2>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row" >
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <a class="btn btn-primary" href="">Agregar</a>
                    <div class="ibox-tools"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></div>
                </div>
                <div class="ibox-content">
                    <form name="formBuscar" action="" method="get">
                        <div class="row">
                            <div class="col-sm-4 m-b-xs">
                                <div class="-group">
                                    <input placeholder="Buscar" type="text" class="form-control form-control-sm" name="buscar" value="">
                                    <span class="-group-append"> <button type="submit" class="btn btn-sm btn-success">Buscar</button> </span>
                                    
                                </div>
                            </div>
                            <div class="col-sm-4 m-b-xs">
                                <div class="-group">
                                    
                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">Fecha de Compra</label>
            
                                        <div class="col-md-6">
                                            <input id="name" type="date" class="form-control" name="fecha" value="" required autocomplete="name" autofocus>
                                        </div>
                                   
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7 m-b-xs" >&nbsp;</div>
                            
                        </div>
                    </form>
                    <div class="row"><div class="col-sm-12 m-b-xs"><span class="text-success">Total: <strong>00</strong></span></div></div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre de Cliente</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Fecha de Compra</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>

                                <tr>
                                    <td>prueba</td>
                                    <td>prueba</td>
                                    <td>prueba</td>
                                    <td>prueba</td>
                                    <td>prueba</td>
                                    <td>prueba</td>
                                    <td >
                                        <a href="" title="Mostrar"><img width="17px" src="{{asset('img/iconos/mostrar.png')}}" alt="Mostrar"></a>
                                        <a href="" title="Modificar"><img width="17px" src="{{asset('img/iconos/modificar.png')}}" alt="Modificar"></a>
                                    </td>
                                </tr>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop