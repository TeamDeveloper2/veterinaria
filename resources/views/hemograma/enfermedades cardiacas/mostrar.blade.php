@extends('layouts.master')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Mostrar EC</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">

                    <div class="ibox-content">
                        <form >
                        <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Codigo Mascota:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="enfercard_codmascota" value="{{$getdato->codmascota}}" disabled>
                                </div>
                            </div>
                            @error('enfercard_codmascota')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre Mascota:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="enfercard_codmascota" value="{{$getdato->nombre}}" disabled>
                                </div>
                            </div>
                            @error('enfercard_codmascota')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Codigo Cliente:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="enfercard_codmascota" value="{{$getdato->id}}" disabled>
                                </div>
                            </div>
                            @error('enfercard_codmascota')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre Cliente:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="enfercard_codmascota" value="{{$getdato->name}}" disabled>
                                </div>
                            </div>
                            @error('enfercard_codmascota')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Niveles Totales de Colesterol:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="colesterolTotal" value="{{$getdato->colesterolTotal}}" disabled>
                                </div>
                            </div>
                            @error('colesterolTotal')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Niveles de HDL:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="nivelHDL" value="{{$getdato->nivelHDL}}" disabled>
                                </div>
                            </div>
                            @error('nivelHDL')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Niveles de LDL:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="nivelLDL" value="{{$getdato->nivelLDL}}" disabled>
                                </div>
                            </div>
                            @error('nivelLDL')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Niveles de Trigiceridos:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="niveltrigiceridos" value="{{$getdato->niveltrigiceridos}}" disabled>
                                </div>
                            </div>
                            @error('niveltrigiceridos')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fecha:</label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control" name="fecha" value="{{$getdato->fecha}}" disabled>
                                </div>
                            </div>
                            @error('fecha')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}

                            <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">                                    
                                    <a class="btn btn-success" href="{{url('/admin/enfermedadesCardiacas_editar/'.$getdato->codenfercardiacas) }}">Modificar</a>
                                    <a class="btn btn-danger" href="{{route('enfermedadesCardiacas_index')}}">Cancelar</a>                                    
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
