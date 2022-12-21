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
                        <a class="btn btn-primary" href="{{route('cirugia.create')}}">Agregar</a>
                        <div class="ibox-tools"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></div>
                    </div>
                    <div class="ibox-content">
                        <form name="formBuscar" action="" method="get">
                            <div class="row" class style="background-color: #1B4F72">
                                <div class="col-sm-3 m-b-xs">
                                    <div class="input-group">
                                        <input type="date" class="form-control" name="Buscar" value="" required="">
                                        
                                        <span class="input-group-append"> <button type="submit"
                                                class="btn btn-sm btn-success">Buscar</button> </span>
                                    </div>
                                </div>
                                <div class="col-sm-7 m-b-xs">&nbsp;</div>
                                <div class="col-sm-2 m-b-xs" style="float: right;"></div> 
                            </div>
                        </form>
                        <div class="row"><div class="col-sm-12 m-b-xs"><span class="text-success">Total: <strong>{{@count($lista)}}</strong></span></div></div>

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
                            @foreach ($lista as $item)
                            <tr>
                                <td>{{$enum++}}</td>
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->tipo_cirugia}}</td>
                                <td>{{$item->precio}}</td>
                                <td>{{$item->fecha}}</td>
                                
                                <td>
                                    <a href="{{route('cirugia.show' , ['codcirugia' => $item->codcirugia])}}" title="Mostrar"><img width="17px"
                                            src="{{ asset('img/iconos/mostrar.png') }}" alt="Mostrar"></a>
                                    <a href="{{route('cirugia.modificar', ['codcirugia' => $item->codcirugia])}}" title="Modificar"><img width="17px"
                                            src="{{ asset('img/iconos/modificar.png') }}" alt="Modificar"></a>                                    
                                </td>
                            </tr>
                            @endforeach
                            <tbody>

@stop
