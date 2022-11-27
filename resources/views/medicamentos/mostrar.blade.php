@extends('layouts.master')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Mostrar Medicamentoss</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">

                    <div class="ibox-content">
                        <form >
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Cantidad</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Detalle</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Precio</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fecha Ingreso</label>
                                <div class="col-sm-10"><input type="date" class="form-control" value="" disabled=""></div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fecha Vencimiento</label>
                                <div class="col-sm-10"><input type="date" class="form-control" value="" disabled=""></div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
