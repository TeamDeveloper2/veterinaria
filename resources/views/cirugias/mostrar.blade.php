@extends('layouts.master')
@section('content') 

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Mostar cirugias</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">

                    <div class="ibox-content">
                        <form >
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre del cliente</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre de la mascota</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tipo de operacion</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Precio de la cirugia</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fecha</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                            </div>
                        </form>
                        <div class="form-group row">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-success " type="submit">Editar</button>
                                <button class="btn btn-danger " type="button" onclick="">Cancelar</button>

                            </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop