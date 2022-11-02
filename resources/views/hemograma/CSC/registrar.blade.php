@extends('layouts.master')


@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Agregar CSC</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">

                    <div class="ibox-content">
                        <form action="/admin/csc_store" method="post">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Codigo Mascota:<i class="text-danger">*</i></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="csc_codmascota" value="" required="">
                                </div>
                            </div>
                            @error('csc_codmascota')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Niveles de Globulos Blancos:<i class="text-danger">*</i></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="globulosBlancos" value="" required="">
                                </div>
                            </div>
                            @error('globulosBlancos')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Niveles de Globulos Rojos:<i class="text-danger">*</i></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="globulosRojos" value="" required="">
                                </div>
                            </div>
                            @error('globulosRojos')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Niveles de Hemoglobina:<i class="text-danger">*</i></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="hemoglobina" value="" required="">
                                </div>
                            </div>
                            @error('hemoglobina')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Niveles de Plaquetas:<i class="text-danger">*</i></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="plaquetas" value="" required="">
                                </div>
                            </div>
                            @error('plaquetas')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Precio:<i class="text-danger">*</i></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="precio" value="" required="">
                                </div>
                            </div>
                            @error('precio')
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
@stop

