@extends('layouts.master')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Lista de Servicios</h2>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row" >
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <a class="btn btn-primary" href="{{route('spa.create')}}">Generar Servicio</a>
                    <div class="ibox-tools"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></div>
                </div>
                <div class="ibox-content">
                    <form name="formBuscar" action="" method="get">
                        <div class="row">                            
                            <div class="col-sm-4 m-b-xs">
                                <div class="-group">
                                    
                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">Fecha de Servicio</label>
            
                                        <div class="col-md-6">
                                            <input id="name" type="date" class="form-control" name="fecha" value="" required autocomplete="name" autofocus>
                                        </div>
                                        <a class="btn btn-primary" href="">Buscar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7 m-b-xs" >&nbsp;</div>
                            
                        </div>
                    </form>
                    <div class="row"><div class="col-sm-12 m-b-xs"><span class="text-success">Total: <strong>{{@count($listaSpa)}}</strong></span></div></div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>                                
                                <th>Nombre de Cliente</th>
                                <th>Mascota</th>
                                <th>Tipo de Servicio</th>
                                <th>Precio Total</th>
                                <th>Fecha</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($listaSpa as $datoSpa)                                                                    
                                <tr>                                                                                                                                                                     
                                    <td>{{$enum++}}</td>
                                    <td>{{$datoSpa->name}}</td>
                                    <td>{{$datoSpa->nombre}}</td>                                                                        
                                    <td>{{$datoSpa->motivo}}</td>
                                    <td>{{$datoSpa->precio}}</td>
                                    <td>{{$datoSpa->fecha}}</td>
                                    <td >                                                                                
                                        <a href="{{route('spa.show' , ['codspa' => $datoSpa->codspa])}}"><img width="17px" src="{{asset('img/iconos/mostrar.png')}}" alt="Mostrar"></a>
                                        <a href="{{route('spa.modificar' , ['codspa' => $datoSpa->codspa])}}"><img width="17px" src="{{asset('img/iconos/modificar.png')}}" alt="Modificar"></a>
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