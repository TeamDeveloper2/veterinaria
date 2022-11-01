@extends('layouts.master')


@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">

                    <div class="ibox-content">
                        <form action="{{route('cuestion1')}}" method="post">
                            {{csrf_field()}}
                            @method('POST')
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Cliente Nuevo: <i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <label class="checkbox-inline">
                                        <input type="radio" class="checkbox_1" value="1" name="value1">SI
                                    </label>
                                        <br>
                                    <label class="checkbox-inline">
                                            <input type="radio" class="checkbox_1" value="0" name="value1">NO
                                    </label>
                                </div>
                            </div>

                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mascota Nueva:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <label class="checkbox-inline">
                                        <input type="radio" class="checkbox_1" value="1" name="value2">SI
                                    </label>
                                        <br>
                                    <label class="checkbox-inline">
                                            <input type="radio" class="checkbox_1" value="0" name="value2">NO
                                    </label>
                                </div>
                            </div>
                            {{-- fin --}}
                            <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-success " type="submit">ENVIAR</button>
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
