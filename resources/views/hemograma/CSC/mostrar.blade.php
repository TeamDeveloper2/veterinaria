@extends('layouts.master')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Mostrar Hemograma</h2>
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
                                    <input type="text" class="form-control" name="csc_codmascota" value="{{$getdato->csc_codmascota}}" disabled>
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
                                <label class="col-sm-2 col-form-label">Niveles de Globulos Blancos::</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="globulosBlancos" value="{{$getdato->globulosBlancos}}" disabled>
                                </div>
                            </div>
                            @error('globulosBlancos')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Niveles de Globulos Rojos:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="globulosRojos" value="{{$getdato->globulosRojos}}" disabled>
                                </div>
                            </div>
                            @error('globulosRojos')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Niveles de Hemoglobina:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="hemoglobina" value="{{$getdato->hemoglobina}}" disabled>
                                </div>
                            </div>
                            @error('hemoglobina')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Niveles de Plaquetas:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="plaquetas" value="{{$getdato->plaquetas}}" disabled>
                                </div>
                            </div>
                            @error('plaquetas')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Precio:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="precio" value="{{$getdato->precio}}" disabled>
                                </div>
                            </div>
                            @error('precio')
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
                                    <a class="btn btn-success" href="{{url('/admin/csc_editar/'.$getdato->codcsc) }}">Modificar</a>                                    
                                    <a class="btn btn-danger"  href="{{route('csc_index')}}">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
