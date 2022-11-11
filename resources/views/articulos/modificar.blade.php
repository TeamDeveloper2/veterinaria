@extends('layouts.master')


@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Modificar Articulo</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">

                    <div class="ibox-content">
                        <form action="" method="post">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nombre" value="" required="">
                                </div>
                            </div>
                            @error('nombres')
                                <div class="alert alert-danger alert-dismissable">inserte aqui<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Cantidad:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="cantidad" value="" required="">
                                </div>
                            </div>
                            @error('cantidad')
                                <div class="alert alert-danger alert-dismissable">inserte aqui<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- comienzo --}}
                            {{-- fin --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Detalle:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="detalle" value="" >
                                </div>
                            </div>
                            @error('detalle')
                                <div class="alert alert-danger alert-dismissable">inserte aqui<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror



                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Precio:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="precio" value="" >
                                </div>
                            </div>
                            @error('precio')
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

