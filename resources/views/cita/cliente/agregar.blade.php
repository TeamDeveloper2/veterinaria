@extends('layouts.cliente')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h1>RESERVAR CITAS</h1>
            <div class="text-center">

              </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-content">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="/client/cita_post" method="POST">
                        @csrf
                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Teléfono de Referencia:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="telefono" value="" required="">
                                </div>
                            </div>
                            @error('telefono')
                                <div class="alert alert-danger alert-dismissable">"inserte mensaje aca si es necesario"<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre Mascota:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <select name="nombre_mascota" class="form-control" required="required">
                                        @foreach ($listMascota as $mascota )
                                            <option value={{ $mascota['nombre'] }}>{{ $mascota['nombre']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Motivo:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="motivo">
                                        <option value="consulta" selected>Consulta</option>
                                        <option value="curacion">Curacion</option>
                                        <option value="ecografia">Ecografia</option>
                                        <option value="hemograma">hemograma</option>
                                        <option value="radiografia">Radiografia</option>
                                        <option value="spa">Spa</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Otros:</label>
                                <div class="col-sm-10">
                                <textarea class="form-control" name="otro"></textarea>
                                </div>
                            </div>
                            @error('mensaje')
                                <div class="alert alert-danger alert-dismissable">"inserte mensaje aca si es necesario"<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fecha:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                <input type="date" id="start" name="fecha" min="2022-01-01" required="">
                                </div>
                            </div>
                            @error('mensaje')
                                <div class="alert alert-danger alert-dismissable">"inserte mensaje aca si es necesario"<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror

                            <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-success" type="submit">Reservar</button>
                                    <a class="btn btn-danger" href="{{route('client.home')}}">Cancelar</a>
                                    <a class="btn btn-secondary" href="{{route('mostrarCita')}}">Cita Pendiente</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
