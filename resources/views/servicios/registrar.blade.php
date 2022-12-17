@extends('layouts.master')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Registrar Servicio Estetico</h2>
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
                        <form action="/admin/spacreate_post" method="post">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Codigo del Cliente:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="codigo_cliente" value="" required="">
                                </div>
                            </div>
                            @error('nombre_cliente')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Codigo de la Mascota:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="codigo_mascota" value="" required="">
                                </div>
                            </div>
                            @error('nombre_mascota')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}
                            

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tipo de Servicio:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="motivo"  id="servicio">
                                        <option value="ducha">Ducha</option>
                                        <option value="limpiezadental" >Limpieza Dental</option>
                                        <option value="peluqueria" >Peluqueria</option>
                                    </select>
                                </div>
                            </div>
                            @error('servicio')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror

                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Precio:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="decimal" class="form-control" name="precio" value="" required="">
                                </div>
                            </div>
                            @error('fecha')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fecha:<i class="text-danger">*</i></label>
                                <div class="col-sm-2">
                                    <input type="date" class="form-control" name="fecha" value="" required="">
                                </div>
                            </div>
                            @error('fecha')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror


                          
                            <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-success " type="submit">Guardar</button>                                    
                                    <a class="btn btn-danger" href="{{route('spa.index')}}">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
