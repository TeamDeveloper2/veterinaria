@extends('layouts.master')


@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Modificar Cita</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">

                    <div class="ibox-content">
                        <form action="{{ url('/client/actualizar_cita/'.$getdatos->codcita) }}" method="post">
                            {{csrf_field()}}
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre del propietario</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="{{$getdatos->name}}" disabled=""></div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre Mascota:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <select name="nombre_mascota" class="form-control" required="required">                                        
                                        <option value={{$getdatos->nombre_mascota}}>{{$getdatos->nombre_mascota}}</option>
                                        @foreach ($listMascota as $mascota )
                                            <option value={{ $mascota['nombre'] }}>{{ $mascota['nombre'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Teléfono</label>
                                <div class="col-sm-10"><input type="number" class="form-control" name="telefono" value="{{$getdatos->telefono}}"></div>
                            </div>    
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Motivo:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="motivo">
                                        <option value="{{$getdatos->motivo}}"selected>{{$getdatos->motivo}}</option>
                                        <option value="consulta" >Consulta</option>
                                        <option value="curacion">Curacion</option>
                                        <option value="ecografia">Ecografia</option>
                                        <option value="hemograma">hemograma</option>
                                        <option value="radiografia">Radiografia</option>                                
                                        <option value="spa">Spa</option>                                
                                    </select>
                                </div>
                            </div>                  
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">otro</label>
                                <div class="col-sm-10"><input type="" class="form-control" name="otro" value="{{$getdatos->otro}}"></div>
                            </div>                            

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">fecha</label>
                                <div class="col-sm-10">
                                    <input type="date"  min="2022-01-01" name="fecha" value="{{$getdatos->fecha}}">
                                </div>
                            </div>                                                        

                            <div class="col-sm-4 col-sm-offset-2">                                    
                                <button type="submit" class="btn btn-primary">Actualizar</button>  
                                <a type="submit"  class="btn btn-danger" href="{{ url('/') }}">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
