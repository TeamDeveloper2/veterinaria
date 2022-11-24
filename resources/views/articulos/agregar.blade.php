@extends('layouts.master')
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Convergence" />
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2 class="titulo" class style="background-color: #1B4F72">
                <font color="FBFBFB ">Artículos</font>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-content">
                    <form method="post" action="{{route('articuloCrear')}}" enctype="multipart/form-data" id="uploadForm">
                    {{csrf_field()}}
                    @method('POST')

                    <div class="mb-3 row">
                        <strong for="cantidad" class="col-sm-2 col-form-label">Nombre Proveedor</strong>
                        <select name="prov" id="prov"  class="col-sm-10" required="required">
                            <option>BUSCA NOMBRE PROVEEDOR</option>
                            @foreach ($p as $p )
                                <option value={{ $p['ci'] }}>{{ $p['nombre_proveedor'].','.$p['apePaterno'].' '.$p['apeMaterno']}}</option>
                            @endforeach
                        </select>
                    </div>
<br>
                    <div class="mb-3 row">
                        <strong for="cantidad" class="col-sm-2 col-form-label">Nombre Articulo</strong>
                        <div class="col-sm-10">
                        <input type="nombre" name="nombre" class="form-control" id="inputnombre">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <strong for="cantidad" class="col-sm-2 col-form-label">Codigo</strong>
                        <div class="col-sm-10">
                        <input type="nombrecod" name="nombrecod" class="form-control" id="inputcod">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <strong for="cantidad" class="col-sm-2 col-form-label">Cantidad</strong>
                        <div class="col-sm-10">
                        <input type="cantidad" name="cantidad" class="form-control" id="inputcantidad">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <strong for="cantidad" class="col-sm-2 col-form-label">Detalle</strong>
                        <div class="col-sm-10">
                        <input type="Detalle" name="detalle" class="form-control" id="inputdetalle">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <strong for="cantidad" class="col-sm-2 col-form-label">Precio</strong>
                        <div class="col-sm-10">
                        <input type="precio" name="precio" class="form-control" id="inputprecio">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <strong for="cantidad" class="col-sm-2 col-form-label">Preview</strong>
                        <div class="col-sm-10">
                            <input type="file" name="images[1]" id="uploadImage1" onchange="previewImage(1);" />
                            <img id="uploadPreview1" width="250" height="250"  />
                        </div>
                    </div>

      <button type="submit" class="btn btn-Success">Guardar</button>
      <button type="button" class="btn btn-Success">Cancelar</button>
    </form>
    </div>
                </div>
            </div></div></div>

    <style>
        .titulo {
            font-family: 'Convergence';
            src: url('public/fonts/Convergence-Regular.ttf');

        }

        @font-face {
            font-family: 'Convergence';
            src: url('public/fonts/Convergence-Regular.ttf');

        }
    </style>

@stop
