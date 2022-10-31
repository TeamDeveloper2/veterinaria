@extends('layouts.master')


@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Mostrar Ecografia de Paciente</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">

                    <div class="ibox-content">
                        <form>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre del Dueño</label>
                                <div class="col-sm-10">< type="text" class="form-control" value="{{$datoecografia->name}}" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre de la Mascota</label>
                                <div class="col-sm-10">< type="text" class="form-control" value="{{$datoecografia->nombre}}" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Raza</label>
                                <div class="col-sm-10">< type="text" class="form-control" value="{{$datoecografia->raza}}" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Genero</label>
                                <div class="col-sm-10">< type="text" class="form-control" value="{{$datoecografia->genero}}" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Area a Revisada</label>
                                <div class="col-sm-10">< type="text" class="form-control" value="{{$datoecografia->area}}" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Observaciones</label>
                                <div class="col-sm-10">< type="text" class="form-control" value="{{$datoecografia->observaciones}}" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Celular</label>
                                <div class="col-sm-10">< type="text" class="form-control" value="{{$datoecografia->telefono}}" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Imagesn de la Ecografia</label>
                                <img src="{{ asset("img_DB/$datoecografia->img_ecografia")}}"  height="auto">
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Creado</label>
                                <div class="col-sm-10">< type="text" class="form-control" value="{{$datoecografia->fecha}}" disabled=""></div>
                            </div>
                            <a class="btn btn-success" href="{{route('lista_ecografia')}}">Atras</a>
                            <a class="btn btn-danger" href="{{url('/admin/ecografia_edit/'.$datoecografia->codecografia) }}">Modificar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

