@extends('layouts.master')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Mostrar Cita</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">

                    <div class="ibox-content">
                        <form action="{{route('ModificiarReservaAdministrador_cita', ['codcita' => $datos->codcita])}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre del propietario</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="{{$datos->name}}" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre de la mascota</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="{{$datos->nombre_mascota}}" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Teléfono</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="{{$datos->telefono}}" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Motivo</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="{{$datos->motivo}}" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">otro</label>
                                <div class="col-sm-10"><input type="" class="form-control" value="{{$datos->otro}}" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Estado</label>                                
                                <div class="col-sm-2">
                                    <select class="form-control" name="estado">
                                        <option value="{{$datos->estado}}" selected>{{$datos->estado}}</option>                                        
                                        <option value="pendiente">pendiente</option>
                                        <option value="atendido">atendido</option>
                                    </select>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">fecha</label>
                                <div class="col-sm-10"><input type="" class="form-control" value="{{$datos->fecha}}" disabled=""></div>
                            </div>                            
                            <div class="col-sm-4 col-sm-offset-2">
                                    <button type="submit" class="btn btn-success">Modificar Cita</button>                                    
                                    <a type="submit"  class="btn btn-danger" href="{{route('admin_citas')}}">Atras</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
