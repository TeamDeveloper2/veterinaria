@extends('layouts.master')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h1>Agregar Alimentos</h1>
            <div class="text-center">
              </div>
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
                            @error('nombre')
                                <div class="alert alert-danger alert-dismissable">"inserte mensaje aca si es necesario"<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Cantidad:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="cantidad" value="" required="">
                                </div>
                            </div>
                            @error('cantidad')
                                <div class="alert alert-danger alert-dismissable">"inserte mensaje aca si es necesario"<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror


                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Detalle:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="detalle" value="" required="">
                                </div>
                            </div>
                            @error('detalle')
                                <div class="alert alert-danger alert-dismissable">"inserte mensaje aca si es necesario"<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Precio:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="precio" value="" required="">
                                </div>
                            </div>
                            @error('precio')
                                <div class="alert alert-danger alert-dismissable">"inserte mensaje aca si es necesario"<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fecha de ingreso:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="fechaIngreso" value="" required="">
                                </div>
                            </div>
                            @error('fechaIngreso')
                                <div class="alert alert-danger alert-dismissable">"inserte mensaje aca si es necesario"<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fecha de vencimiento:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="fechaVencimiento" value="" required="">
                                </div>
                            </div>
                            @error('fechaVencimiento')
                                <div class="alert alert-danger alert-dismissable">"inserte mensaje aca si es necesario"<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror


















                            <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-success " type="submit">Guardar</button>
                                    <button class="btn btn-success " type="button" onclick="">Cancelar</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
