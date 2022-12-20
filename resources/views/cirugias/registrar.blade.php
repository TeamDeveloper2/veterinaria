@extends('layouts.master')
@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Registar Operacion</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">

                    <div class="ibox-content">
                        <form action="" method="post">
                            {{csrf_field()}}
                            @method('POST')
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombres del ciente:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nombres_c" value="" required="">
                                </div>
                            </div>
                            @error('nombres_c')
                                <div class="alert alert-danger alert-dismissable">"inserte mensaje aca si es necesario"<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre de la mascota:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nombre_m" value="" required="">
                                </div>
                            </div>
                            @error('nombres_m')
                                <div class="alert alert-danger alert-dismissable">"inserte mensaje aca si es necesario"<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tipo de operacion:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tipo" value="" required="">
                                </div>
                            </div>
                            @error('tipo')
                                <div class="alert alert-danger alert-dismissable">"inserte mensaje aca si es necesario"<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror 

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Precio de la cirugia:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="cirugia" value="" required="">
                                </div>
                            </div>
                            @error('cirugia')
                                <div class="alert alert-danger alert-dismissable">"inserte mensaje aca si es necesario"<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            
                           

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fecha:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="fecha" value="" required="">
                                </div>
                            </div>
                            @error('fecha')
                                <div class="alert alert-danger alert-dismissable">"inserte mensaje aca si es necesario"<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror


                            
                            <div class="mb-3 row">
                                <strong for="cantidad" class="col-sm-2 col-form-label">Preview</strong>
                                <div class="col-sm-10">
                                    <input type="file" name="images[1]" id="uploadImage1" onchange="previewImage(1);" />
                                    <img id="uploadPreview1" width="250" height="250"  />
                                </div>
                              </div>
                        
                              <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-success " type="submit">Registrar</button>
                                    <button class="btn btn-danger " type="button" onclick="">Cancelar</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop