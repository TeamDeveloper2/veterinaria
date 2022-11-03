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
                        <form action="{{route('store')}}" method="post">
                            {{csrf_field()}}
                            @method('POST')
                            <div class="form-group">
                                <label for="name" class="form-label">NOMBRE de DUEÑO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <select name="cliente" id="cliente"  class="form-control,width:100px" required="required">
                                    <option>--------BUSCA NOMBRE CLIENTE--------<></option>
                                    @foreach ($n as $n )
                                        <option value={{ $n['id'] }}>{{ $n['name']}},{{ $n['apePaterno']}}&nbsp; {{ $n['apeMaterno']}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="name" class="form-label">NOMBRE de DUEÑO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <select name="id_mascota"  id="inputid_mascota" class="form-control,width:100px" required="required">
                                    <option>--------BUSCA NOMBRE MASCOTA--------<></option>
                                    @foreach ($m as $m )
                                        <option value={{ $m['codmascota'] }}>{{ $m['nombre']}}</option>
                                    @endforeach
                                </select>
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
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Descripcion:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="desc" value="" required="">
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

@endsection
