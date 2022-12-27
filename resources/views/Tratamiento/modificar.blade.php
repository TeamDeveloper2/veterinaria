@extends('layouts.master')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Modificar Tratamiento</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-content">
                        <form action="{{url('admin/tratamiento/update/'.$m->codmascota)}}" method="post">
                            @csrf
                            @method('post')
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre de la mascota:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nombre" value={{$r->nombre}} required="">
                                </div>
                            </div>
                            @error('nombre de la mascota ')
                                <div class="alert alert-danger alert-dismissable">inserte aqui<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fecha:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="fecha" value={{$r->fechaNacimiento}} required="">
                                </div>
                            </div>
                            @error('fecha')
                                <div class="alert alert-danger alert-dismissable">inserte aqui<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- comienzo --}}
                            {{-- fin --}}
                            @foreach ($r1 as $r1)
                                <div class="mb-3">
                                    <strong for="trata" class="form-label">Enfermedad/Malestar</strong>
                                    <input type="text" class="form-control" id="Enfermedad" value={{$r1->nombreEnfermedad}} >
                                </div>

                                <div class="mb-3">
                                    <strong for="trata" class="form-label"> Tratamiento</strong>
                                    <input type="text" class="form-control" id="Tratamiento" name="Tratamiento" value={{$r1->nombreMedicamentos.'->'.$r1->dosisporDia.'tableta/D'}} >
                                </div>
                                @if ($r1->recomendacion == null)
                                <div class="mb-3">
                                    <strong for="recomend" class="form-label"> Recomendación</strong>
                                    <input class="form-control" id="recomendacion" name="recomendacion" rows="3" value='NINGUNA'></div>
                                @else
                                <div class="mb-3">
                                    <strong for="recomend" class="form-label"> Recomendación</strong>
                                    <input class="form-control" id="recomendacion" name="recomendacion" value={{$r1->recomendacion}}>
                                </div>
                                @endif
                            @endforeach
                            <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-success " type="submit">Guardar</button>
                                    <button class="btn btn-success " type="button" onclick="'">Cancelar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop

