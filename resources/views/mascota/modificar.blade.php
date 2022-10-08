@extends('layouts.master')


@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Modificar Mascota</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    
                    <div class="ibox-content">
                        <form action="" method="post">
        
                           

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre de Mascota:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nombres" value="" required="">
                                </div>
                            </div>
                            @error('nombres')
                                <div class="alert alert-danger alert-dismissable">inserte sms aqui<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- comienzo --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Raza:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="raza" value="" required="">
                                </div>
                            </div>
                            @error('raza')
                                <div class="alert alert-danger alert-dismissable">inserte sms aqui<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- fin --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Color:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="color" value="" >
                                </div>
                            </div>
                            @error('color')
                                <div class="alert alert-danger alert-dismissable">inserte sms aqui<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Genero:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="genero"  id="genero">
                                        <option value="M"  selected="" >Macho</option>
                                        <option value="F"  selected="" >Hembra</option>
                                       
                                    </select>
                                </div>
                            </div>
                            @error('genero')
                                <div class="alert alert-danger alert-dismissable">inserte sms aqui<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Especie:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="especie" value="" required="">
                                </div>
                            </div>
                            @error('especie')
                                <div class="alert alert-danger alert-dismissable">inserte sms aqui<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                        
                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fecha de nacimiento:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="fecha_nacimiento" value="{{old('fecha_nacimiento',$persona->fecha_nacimiento)}}" required="">
                                </div>
                            </div>
                            @error('fecha_nacimiento')
                                <div class="alert alert-danger alert-dismissable">inserte sms aqui<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                        
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Peso</label>:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="peso" value="" required="">
                                </div>
                            </div>
                            @error('peso')
                                <div class="alert alert-danger alert-dismissable">inserte sms aqu<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                        

                            <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-success " type="submit">Guardar</button>
                                    <button class="btn btn-danger " type="button" onclick="'">Cancelar</button>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@stop