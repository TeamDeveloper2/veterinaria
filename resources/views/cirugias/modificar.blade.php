@extends('layouts.master')
@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Modificar</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
 
                    <div class="ibox-content">
                        <form action="{{route('cirugia.update', ['codcirugia' => $getdato->codcirugia])}}" method="post">
                            {{csrf_field()}}
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Codigo del Cliente:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="codcirugia_codcliente" value="{{$getdato->codcirugia_codcliente}}" required="">
                                </div>
                            </div>
                            @error('nombres_c')
                                <div class="alert alert-danger alert-dismissable">"inserte mensaje aca si es necesario"<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Codigo de la Mascota:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="codcirugia_codmascota" value="{{$getdato->codcirugia_codmascota}}" required="">
                                </div>
                            </div>
                            @error('nombres_m')
                                <div class="alert alert-danger alert-dismissable">"inserte mensaje aca si es necesario"<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tipo de Cirugia:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="tipo_cirugia" required>
                                        <option value="{{$getdato->tipo_cirugia}}"selected>{{$getdato->tipo_cirugia}}</option>
                                        <option value="castracion">castracion</option>
                                        <option value="cataratas" >Cataratas</option>
                                        <option value="aputacion_cola" >Amputacion de cola</option>
                                        <option value="oreja" >Orejas</option>
                                        <option value="traumatologia" >Traumatologia</option>
                                    </select>
                                </div>
                            </div>
                            @error('tipo')
                                <div class="alert alert-danger alert-dismissable">"inserte mensaje aca si es necesario"<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Precio de la cirugia:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="precio" value="{{$getdato->precio}}" required="">
                                </div>
                            </div>
                            @error('cirugia')
                                <div class="alert alert-danger alert-dismissable">"inserte mensaje aca si es necesario"<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                                                    
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fecha:<i class="text-danger">*</i></label>
                                <div class="col-sm-2">
                                    <input type="date" class="form-control" name="fecha" value="{{$getdato->fecha}}" required="">
                                </div>
                            </div>
                            @error('fecha')
                                <div class="alert alert-danger alert-dismissable">"inserte mensaje aca si es necesario"<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror                        
                              
                            <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-success " type="submit">Actualizar</button>
                                    <a href="{{route('cirugia.index')}}" class="btn btn-danger ">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop