@extends('layouts.master')
@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Registar Operacion</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">

                    <div class="ibox-content">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{route('cirugia.guardar')}}" method="post">
                            {{csrf_field()}}
                            @method('POST')
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Codigo del Cliente:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="codcirugia_codcliente" value="" required="">
                                </div>
                            </div>
                            @error('nombres_c')
                                <div class="alert alert-danger alert-dismissable">"inserte mensaje aca si es necesario"<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Codigo de la mascota:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="codcirugia_codmascota" value="" required="">
                                </div>
                            </div>
                            @error('nombres_m')
                                <div class="alert alert-danger alert-dismissable">"inserte mensaje aca si es necesario"<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tipo de Cirugia:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="tipo_cirugia"  id="servicio">                                    
                                        <option value="castracion">castracion</option>
                                        <option value="cataratas" >Cataratas</option>
                                        <option value="aputacion_cola" >Amputacion de cola</option>
                                        <option value="oreja" >Orejas</option>
                                        <option value="traumatologia" >Traumatologia</option>
                                    </select>
                                </div>
                            </div>
                            @error('servicio')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Precio de la cirugia:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="decimal" class="form-control" name="precio" value="" required="">
                                </div>
                            </div>
                            @error('cirugia')
                                <div class="alert alert-danger alert-dismissable">"inserte mensaje aca si es necesario"<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                                                    
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fecha:<i class="text-danger">*</i></label>
                                <div class="col-sm-2">
                                    <input type="date" class="form-control" name="fecha" value="" required="">
                                </div>
                            </div>
                            @error('fecha')
                                <div class="alert alert-danger alert-dismissable">"inserte mensaje aca si es necesario"<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror

                              <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-success " type="submit">Registrar</button>
                                    <a href="{{route('cirugia.index')}}" class="btn btn-danger" type="button">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop