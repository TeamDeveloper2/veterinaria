@extends('layouts.master')
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Convergence" />
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2 class="titulo" class style="background-color: #1B4F72">
                <font color="FBFBFB ">Tratamiento</font>
        </div>
    </div>
<div class="mb-3">
  <strong for="nom" class="form-label">Nombre de la mascota</strong >
  <input type="nombres" class="form-control" id="nombres" placeholder="">
</div>

<div class="mb-3">
  <strong for="fe" class="form-label">Fecha</strong>
  <input type="date" class="form-control" id="fecha" placeholder="">
</div>

<div class="mb-3">
  <strong for="trata" class="form-label"> Tratamiento</strong>
  <textarea class="form-control" id="Tratamiento" rows="3"></textarea>
</div>
<div class="mb-3">
  <strong for="recomend" class="form-label"> Recomendación</strong>
  <textarea class="form-control" id="recomendacion" rows="3"></textarea>
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
