@extends('layouts.master')


@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Modificar Cantidad</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">

                    <div class="ibox-content">
                        <form action="{{url('/admin/articulo/update/'.$i->codItem)}}"   method="post">

                            {{csrf_field()}}
                            @method('POST')
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nombre" value={{$i->nombreItem}} required="" disabled>
                                </div>
                            </div>
                            @error('nombres')
                                <div class="alert alert-danger alert-dismissable">inserte aqui<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            <div class="mb-3 row">
                                <strong for="cantidad" class="col-sm-2 col-form-label">Codigo</strong>
                                <div class="col-sm-10">
                                  <input type="nombre" name="nombrecod" class="form-control" id="inputcod" value={{$i->codigoProducto}} required="" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Cantidad:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="cantidad" value={{$i->cantidadActual}} required="">
                                </div>
                            </div>
                            @error('cantidad')
                                <div class="alert alert-danger alert-dismissable">inserte aqui<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            {{-- comienzo --}}
                            {{-- fin --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Detalle:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value={{$i->detalle}} required="" disabled>
                                </div>
                            </div>
                            @error('detalle')
                                <div class="alert alert-danger alert-dismissable">inserte aqui<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror



                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Precio:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="precio" value={{$i->precio}} required="">
                            </div>
                            <br>
                            @error('precio')
                                <div class="alert alert-danger alert-dismissable">inserte aqui<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>
                            @enderror
                            <br>
                            @if(  $i->codProvedor != null )
                            <br>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre Proveedor:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nombre" value={{$iii->nombre_proveedor}} required="" disabled>
                                </div>
                            </div>
                            @endif
                            <br>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre Proveedor:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nombre" value="Nombre Por Defecto" required="" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-success " type="submit">Guardar</button>
                                    <button class="btn btn-success " type="button" onclick="'">Cancelar</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop

