@extends('layouts.master')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Informacion del Proveedor</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">

                    <div class="ibox-content">
                        <form >
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Cedula de Identidad</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="{{$getdato->ci}}" disabled></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="{{$getdato->nombre_proveedor}}" disabled></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Apellido Paterno</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="{{$getdato->apePaterno}}" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Apellido Materno</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="{{$getdato->apeMaterno}}" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">CI</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="{{$getdato->genero}}" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre de Empresa</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="{{$getdato->nombre_empresa}}" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Direccion de Empresa</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="{{$getdato->direccion_empresa}}" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Telefono de Referencia</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="{{$getdato->telefono}}" disabled=""></div>                                
                            </div>
                            <div class="col-sm-4 col-sm-offset-2">
                                <a type="submit"  class="btn btn-success" href="{{url('/admin/proveedor_editar/'.$getdato->ci)}}">Modificar Proveedor</a>
                                <a type="submit"  class="btn btn-danger" href="{{route('proveedor_index')}}">Atras</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
