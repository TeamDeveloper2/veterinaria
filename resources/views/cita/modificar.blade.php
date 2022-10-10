@extends('layouts.master')


@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Modificar Cita</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">

                    <div class="ibox-content">
                        <form action="" method="post">



                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre del propietario:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nombresP" value="" required="">
                                </div>
                            </div>
                            @error('nombresP')
                                <div class="alert alert-danger alert-dismissable">inserte sms aqui<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre de tu mascota:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nombresM" value="" required="">
                                </div>
                            </div>
                            @error('nombresM')
                                <div class="alert alert-danger alert-dismissable">inserte sms aqui<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- comienzo --}}
                            {{-- fin --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Teléfono:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="telefono" value="" >
                                </div>
                            </div>
                            @error('telefono')
                                <div class="alert alert-danger alert-dismissable">inserte sms aqui<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Genero:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="genero"  id="genero">
                                        <option value="M"  selected="" >Macho</option>
                                        <option value="F"  selected="" >Hembra</option>

                                    </select>
                                </div>
                            </div>
                            @error('genero')
                                <div class="alert alert-danger alert-dismissable">inserte sms aqui<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email1:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="email" value="" >
                                </div>
                            </div>
                            @error('email')
                                <div class="alert alert-danger alert-dismissable">inserte sms aqui<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror



                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mensaje</label>:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="mensaje" value="" required="">
                                </div>
                            </div>
                            @error('mensaje')
                                <div class="alert alert-danger alert-dismissable">inserte sms aqu<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror


                            <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-success " type="submit">Guardar</button>
                                    <button class="btn btn-danger " type="button" onclick="'">Cancelar</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
