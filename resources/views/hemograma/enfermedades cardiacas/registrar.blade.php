@extends('layouts.master')


@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Registrar Analisis de Enfermedad Cardiaca</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">

                    <div class="ibox-content">
                        <form action="/admin/enfermedadesCardiacas_store" method="post">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Codigo Mascota:<i class="text-danger">*</i></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="enfercard_codmascota" value="" required="">
                                </div>
                            </div>
                            @error('enfercard_codmascota')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Niveles Totales de Colesterol:<i class="text-danger">*</i></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="colesterolTotal" value="" required="">
                                </div>
                            </div>
                            @error('colesterolTotal')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Niveles de HDL:<i class="text-danger">*</i></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="nivelHDL" value="" required="">
                                </div>
                            </div>
                            @error('nivelHDL')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Niveles de LDL:<i class="text-danger">*</i></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="nivelLDL" value="" required="">
                                </div>
                            </div>
                            @error('nivelLDL')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Niveles de Trigiceridos:<i class="text-danger">*</i></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="niveltrigiceridos" value="" required="">
                                </div>
                            </div>
                            @error('niveltrigiceridos')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fecha:<i class="text-danger">*</i></label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control" name="fecha" value="" required="">
                                </div>
                            </div>
                            @error('fecha')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}
                            <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-success " type="submit">Guardar</button>
                                    <a class="btn btn-danger" href="{{route('csc_index')}}">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection