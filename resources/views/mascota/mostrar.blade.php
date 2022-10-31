@extends('layouts.master')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Mostrar Mascotas</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">

                    <div class="ibox-content">
                        <form >
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre de Mascota</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value={{$a->nombre}} disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Raza</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value={{$a->raza}} disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Color</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value={{$a->color}} disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Genero</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value={{$a->genero}} disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Especie</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value={{$a->especie}} disabled=""></div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value={{$a->fechaNacimiento}} disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Peso</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value={{$a->peso}} disabled=""></div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Activo</label>
                                <div class="col-sm-10">

                                        <span class="label label-primary">SI</span>

                                        <span class="label label-warning">NO</span>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Creado</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value={{$b->name}}  disabled=""></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop
