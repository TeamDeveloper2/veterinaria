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
  <input type="text" class="form-control" id="nombres"  value={{$r->nombre}}>
</div>

<div class="mb-3">
  <strong for="fe" class="form-label">Fecha</strong>
  <input type="date" class="form-control" id="fecha" placeholder="" value={{$r->fechaNacimiento}}>
</div>
@foreach ($r1 as $r1)
<div class="mb-3">
    <strong for="trata" class="form-label">Enfermedad/Malestar</strong>
    <input type="text" class="form-control" id="Tratamiento" value={{$r1->nombreEnfermedad}} >
  </div>

<div class="mb-3">
  <strong for="trata" class="form-label"> Tratamiento</strong>
  <input type="text" class="form-control" id="Tratamiento" value={{$r1->nombreMedicamentos.'->'.$r1->dosisporDia.'tableta/D'}} >
</div>
@if ($r1->recomendacion == null)
<div class="mb-3">
    <strong for="recomend" class="form-label"> Recomendación</strong>
    <input class="form-control" id="recomendacion" rows="3" value='NINGUNA'></div>
  @else
  <div class="mb-3">
    <strong for="recomend" class="form-label"> Recomendación</strong>
    <input class="form-control" id="recomendacion" rows="3" value={{$r1->recomendacion}}>
</div>
@endif
@endforeach
<input type="button" value="Página anterior" onClick="history.go(-1);">


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
