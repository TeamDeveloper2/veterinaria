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
                        <form action="" method="post">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre de la mascota:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nombre" value="" required="">
                                </div>
                            </div>
                            @error('nombre de la mascota ')
                                <div class="alert alert-danger alert-dismissable">inserte aqui<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fecha:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="fecha" value="" required="">
                                </div>
                            </div>
                            @error('fecha')
                                <div class="alert alert-danger alert-dismissable">inserte aqui<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- comienzo --}}
                            {{-- fin --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tratamiento:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tratamiento" value="" >
                                </div>
                            </div>
                            @error('tratamiento')
                                <div class="alert alert-danger alert-dismissable">inserte aqui<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Recomendacion:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="recomendacion" value="" >
                                </div>
                            </div>
                            @error('recomendacion')
                                <div class="alert alert-danger alert-dismissable">inserte aqui<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror


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

