@extends('layouts.master')


@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Modificar Ecogrfia</h2>
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
                        <form action="{{url('/admin/ecografia_update/'.$getitem->codecografia)}}" enctype="multipart/form-data"  method="post">
                            @csrf   
                            @method('PUT')                        
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Codigo Mascota:<i class="text-danger">*</i></label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="codecografia_mascota" value="{{$getitem->codecografia_mascota}}" required="">
                                </div>
                            </div>
                            @error('codecografia_mascota')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Area revisada:<i class="text-danger">*</i></label>
                                <div class="col-sm-2"> 
                                    <select class="form-control" name="area" require>
                                        <option value="{{$getitem->area}}"selected>{{$getitem->area}}</option>
                                        <option value="abdomen">Abdomen</option>
                                        <option value="pelvis">Pelvis</option>
                                    </select>                                   
                                </div>
                            </div>
                            @error('area')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror    


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Observaciones:</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" name="observaciones" value="{{$getitem->observaciones}}" ></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Numero de referencia:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="telefono" value="{{$getitem->telefono}}" required="">
                                </div>
                            </div>
                            @error('telefono')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror                        

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fecha:<i class="text-danger">*</i></label>
                                <div class="col-sm-2">
                                    <input type="date" class="form-control" name="fecha" value="{{$getitem->fecha}}" required="">
                                </div>
                            </div>
                            @error('fecha')
                                <div class="alert alert-danger alert-dismissable">{{$message}}<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Imagen de la Ecografia del Paciente:</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="img_ecografia" value="{{$getitem->img_ecografia}}" >
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-success " type="submit">Actualizar</button>
                                    <a class="btn btn-danger" href="{{route('lista_ecografia')}}">Cancelar</a>                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@stop
