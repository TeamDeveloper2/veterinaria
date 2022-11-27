@extends('layouts.master')
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Convergence" />
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2 class="titulo" class style="background-color: #1B4F72">
                <font color="FBFBFB ">Alimentos</font>
        </div>
    </div>

    <div class="mb-3 row">
        <strong for="cantidad" class="col-sm-2 col-form-label">Nombre</strong>
        <div class="col-sm-10">
          <input type="nombre" class="form-control" id="inputnombre">
        </div>
      </div>
      <div class="mb-3 row">
        <strong for="cantidad" class="col-sm-2 col-form-label">Cantidad</strong>
        <div class="col-sm-10">
          <input type="cantidad" class="form-control" id="inputcantidad">
        </div>
      </div>

      <div class="mb-3 row">
        <strong for="cantidad" class="col-sm-2 col-form-label">Detalle</strong>
        <div class="col-sm-10">
          <input type="Detalle" class="form-control" id="inputdetalle">
        </div>
      </div>

      <div class="mb-3 row">
        <strong for="cantidad" class="col-sm-2 col-form-label">Precio</strong>
        <div class="col-sm-10">
          <input type="precio" class="form-control" id="inputprecio">
        </div>
      </div>


      <div class="mb-3 row">
        <strong for="cantidad" class="col-sm-2 col-form-label">Fecha de Ingreso</strong>
        <div class="col-sm-10">
          <input type="fechaIngreso" class="form-control" id="inputFechaIngreso">
        </div>
      </div>

      <div class="mb-3 row">
        <strong for="cantidad" class="col-sm-2 col-form-label">Fecha de Vencimiento</strong>
        <div class="col-sm-10">
          <input type="fechaVencimiento" class="form-control" id="inputFechaVencimiento">
        </div>
      </div>



      <button type="button" class="btn btn-Success">Guardar</button>
      <button type="button" class="btn btn-Success">Cancelar</button>
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
