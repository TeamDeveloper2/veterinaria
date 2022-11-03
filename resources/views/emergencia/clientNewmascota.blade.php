@extends('layouts.master')


@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Agregar Emergencia</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">

                    <div class="ibox-content">
                        <form action="{{route('storem')}}" method="post">
                            {{csrf_field()}}
                            @method('POST')
                            <div class="form-group">
                                <label for="name" class="form-label">NOMBRE de DUEÑO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <select name="cliente" id="cliente"  class="form-control,width:100px" required="required">
                                    <option>--------BUSCA NOMBRE CLIENTE--------<></option>
                                    @foreach ($n as $n )
                                        <option value={{ $n['id'] }}>{{ $n['name']}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nombre de la Mascota:<i class="text-danger">*</i></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nombrem" value="" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Raza:<i class="text-danger">*</i></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="razam value="" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Genero:<i class="text-danger">*</i></label>
                            <div class="col-sm-10">
                                <select class="form-control" name="generom"  id="genero">
                                    <option value="" selected="" ></option>
                                    <option value="M" selected="" >Macho</option>
                                    <option value="F"  selected="" >Hembra</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Fecha de nacimiento:<i class="text-danger">*</i></label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="fecha_nacimientom" value="" required="">
                            </div>
                        </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Envenenamiento: <i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <label class="checkbox-inline">
                                        <input type="radio" class="checkbox_1" value="1" name="env1">SI
                                    </label>
                                        <br>
                                    <label class="checkbox-inline">
                                            <input type="radio" class="checkbox_1" value="0" name="env1">NO
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">fracturaHueso: <i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <label class="checkbox-inline">
                                        <input type="radio" class="checkbox_1" value="1" name="frac1">SI
                                    </label>
                                        <br>
                                    <label class="checkbox-inline">
                                            <input type="radio" class="checkbox_1" value="0" name="frac1">NO
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Enfermedad: <i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <label class="checkbox-inline">
                                        <input type="radio" class="checkbox_1" value="1" name="enf1">SI
                                    </label>
                                        <br>
                                    <label class="checkbox-inline">
                                            <input type="radio" class="checkbox_1" value="0" name="enf1">NO
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tratamiento: <i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <label class="checkbox-inline">
                                        <input type="radio" class="checkbox_1" value="1" name="tra1">SI
                                    </label>
                                        <br>
                                    <label class="checkbox-inline">
                                            <input type="radio" class="checkbox_1" value="0" name="tra1">NO
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Parto: <i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <label class="checkbox-inline">
                                        <input type="radio" class="checkbox_1" value="1" name="par1">SI
                                    </label>
                                        <br>
                                    <label class="checkbox-inline">
                                            <input type="radio" class="checkbox_1" value="0" name="par1">NO
                                    </label>
                                </div>
                            </div>

                            {{-- fin --}}
                            <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-success " type="submit">Guardar</button>
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
