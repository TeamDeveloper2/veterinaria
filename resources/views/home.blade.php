@extends('layouts.master')
@section('titulo', $parControl['titulo'])

@section('content')
    <div class="row  border-bottom white-bg dashboard-header">
        <h2>Bienvenid@ {{ session('nombre') }}</h2>
    </div>
@stop
