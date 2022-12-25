@extends('layouts.master')
@section('content') 
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Mostar cirugias</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">

                    <div class="ibox-content">
                        <form > 
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Codigo del cliente</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="{{$getdato->codcirugia_codcliente}}" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre del cliente</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="{{$getdato->nombre}}" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Codigo de la mascota</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="{{$getdato->codcirugia_codmascota}}" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre de la mascota</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="{{$getdato->name}}" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tipo de operacion</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="{{$getdato->tipo_cirugia}}" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Precio de la cirugia</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="{{$getdato->precio}}" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fecha</label>
                                <div class="col-sm-10"> <input type="date" class="form-control" name="fecha" value="{{$getdato->fecha}}" disabled="">
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Imagen </label>
                                <img src=""  height="auto">
                            </div>
                        </form>
                        <div class="form-group row">
                            <div class="col-sm-4 col-sm-offset-2">
                                <a href="{{route('cirugia.modificar' , ['codcirugia' => $getdato->codcirugia])}}" class="btn btn-success ">Modificar</a>
                                <a href="{{route('cirugia.index')}}" class="btn btn-danger ">Cancelar</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop