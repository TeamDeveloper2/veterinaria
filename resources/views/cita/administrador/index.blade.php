@extends('layouts.master')
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Convergence" />
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2 class="titulo" class style="background-color: #1B4F72">
                <font color="FBFBFB ">Citas</font>
        </div>
        <img src="https://us.123rf.com/450wm/olegdudko/olegdudko1507/olegdudko150700686/41879950-veterinario-perro-veterinario-.jpg?ver=6"
            class="rounded mx-auto d-block" alt="" width="600" height=" 180">

            <div>
                <img src="{{asset('img/vim3.png')}}"  alt="" style="width:130px" >

            </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-content">
                        <form action="{{route('BuscarFechaReservaAdministrador_cita')}}" method="get">
                            @csrf
                            <div class="row"class style="background-color: #1B4F72">
                                <div class="col-sm-3 m-b-xs">
                                    <div class="input-group">
                                        <input placeholder="Ingrese la fecha" type="date" class="form-control form-control-sm" name="fecha">                                        
                                        <button type="submit" class="btn btn-sm btn-success">Buscar</button>                                        
                                    </div>
                                </div>
                                <div class="col-sm-5 m-b-xs">&nbsp;</div>
                                <div class="col-sm-2 m-b-xs" style="float: right;"></div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-sm-12 m-b-xs"> <span class="text-success">Total: </span> <strong>{{$total}}</strong>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID Cliente</th>
                                    <th>Cliente</th>
                                    <th>Mascota</th>
                                    <th>Motivo</th>
                                    <th>Telefono</th>
                                    <th>Estado</th>
                                    <th>Fecha</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($getdatoslista as $dato)
                                <tr>
                                    <th>{{$contador++}}</th>
                                    <td>{{$dato->id}}</td>
                                    <td>{{$dato->name}}</td>
                                    <td>{{$dato->nombre_mascota}}</td>
                                    <td>{{$dato->motivo}}</td>
                                    <td>{{$dato->telefono}}</td>
                                    <td>{{$dato->estado}}</td>
                                    <td>{{$dato->fecha}}</td>
                                    <td >
                                        <a href="{{route('MostrarReservaAdministrador_cita' , ['codcita' => $dato->codcita])}}" title="Mostrar"><img width="17px" src="{{asset('img/iconos/mostrar.png')}}" alt="Mostrar"></a>                                        
                                    </td>                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
