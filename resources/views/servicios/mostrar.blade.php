@extends('layouts.master')


@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Mostrar Datos</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">

                    <div class="ibox-content">
                        <form >
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Codigo de Cliente</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{$getdato->codspa_codcliente}}" disabled="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre del Cliente</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{$getdato->name}}" disabled="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Codigo de Mascota</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="{{$getdato->codspa_codmascota}}" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre de la Mascota</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="{{$getdato->nombre}}" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tipo de Servicio</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="{{$getdato->motivo}}" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Precio</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="{{$getdato->precio}} Bs" disabled=""></div>
                            </div>
                           

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fecha</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="{{$getdato->fecha}}" disabled=""></div>
                            </div>
                        </form>
                        <div class="form-group row">
                            <div class="col-sm-4 col-sm-offset-2">
                                <a href="{{route('spa.modificar' , ['codspa' => $getdato->codspa])}}" class="btn btn-success ">Modificar</a>                                
                                <a href="{{route('spa.index')}}" class="btn btn-danger ">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
