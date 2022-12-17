@extends('layouts.master')
@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2 class="titulo" class style="background-color: #1B4F72">
                <font color="FBFBFB ">Cirugias</font>
        </div>
        <div>
            <img src="{{asset('img/vim3.png')}}"  alt="" style="width:130px" >

        </div>


    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <a class="btn btn-primary" href="">Agregar</a>
                        <div class="ibox-tools"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></div>
                    </div>
                    <div class="ibox-content">
                        <form name="formBuscar" action="" method="get">
                            <div class="row" class style="background-color: #1B4F72">
                                <div class="col-sm-3 m-b-xs">
                                    <div class="input-group">
                                        <input placeholder="Buscar" type="text" class="form-control form-control-sm"
                                            name="buscar" value="">
                                        <span class="input-group-append"> <button type="submit"
                                                class="btn btn-sm btn-success">Buscar</button> </span>
                                    </div>
                                </div>
                                <div class="col-sm-7 m-b-xs">&nbsp;</div>
                                <div class="col-sm-2 m-b-xs" style="float: right;"></div>
                            </div>
                        </form>
                        <div class="row"><div class="col-sm-12 m-b-xs"><span class="text-success">Total: <strong>00</strong></span></div></div>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombres del cliente </th>
                                    <th>Mascota</th>
                                    <th>Cirugia</th>
                                    <th>Precio</th>
                                    <th>Fecha</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>1</td>
                                <td>Federico Gonzales</td>
                                <td>Rifle</td>
                                <td>Esterilizacion</td>
                                <td>200</td>
                                <td>7/8/2022</td>
                                
                                <td>
                                    <a href="" title="Mostrar"><img width="17px"
                                            src="{{ asset('img/iconos/mostrar.png') }}" alt="Mostrar"></a>
                                    <a href="" title="Modificar"><img width="17px"
                                            src="{{ asset('img/iconos/modificar.png') }}" alt="Modificar"></a>
                                    <a class="btn-eliminar" title="Eliminar"><img width="17px"
                                            src="{{ asset('img/iconos/eliminar.png') }}" alt="Eliminar"></a>
                                </td>
                            </tr>

                            <tbody>

@stop
