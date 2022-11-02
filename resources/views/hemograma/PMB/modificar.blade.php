@extends('layouts.master')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Modificar PMB</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">

                    <div class="ibox-content">
                        <form action="{{url('/admin/pmb_update/'.$getdato->codpmb)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Codigo Mascota:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="pmb_codmascota" value="{{$getdato->pmb_codmascota}}">
                                </div>
                            </div>
                            @error('pmb_codmascota')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre de la Mascota:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" value="{{$getdato->nombre}}" disabled>
                                </div>
                            </div>
                            @error('calcio')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Codigo Cliente:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" value="{{$getdato->id}}" disabled>
                                </div>
                            </div>
                            @error('calcio')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre Cliente:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" value="{{$getdato->name}}" disabled>
                                </div>
                            </div>
                            @error('calcio')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Niveles de Calcio:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="calcio" value="{{$getdato->calcio}}">
                                </div>
                            </div>
                            @error('calcio')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Niveles de Electrocitos:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="electrocitos" value="{{$getdato->electrocitos}}">
                                </div>
                            </div>
                            @error('electrocitos')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Niveles de Glucosa:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="glucosa" value="{{$getdato->glucosa}}">
                                </div>
                            </div>
                            @error('glucosa')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fecha:</label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control" name="fecha" value="{{$getdato->fecha}}">
                                </div>
                            </div>
                            @error('fecha')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}

                            <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-success " type="submit">Actualizar</button>
                                    <a class="btn btn-danger" href="{{route('pmb_index')}}">Cancelar</a>                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @stop
