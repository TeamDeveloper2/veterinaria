@extends('layouts.master')
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Convergence" />

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2 class="titulo" class style="background-color: #1B4F72">
            <font color="FBFBFB ">Hemograma</font>            
        <div class="container">        
            <br>
            <br>
            <div class="row">
                <div class="col-sm">                
                    <a href="{{route('pmb_index')}}" class="btn btn-success btn-sm ">
                    <img src="{{asset('img/gallery/pmb.jpg')}}" height ="80" width="100"> Panel Metabolico Basico (PMB)</a>
                </div>
                <div class="col-sm">
                    <Conteo href="{{route('csc_index')}}" class="btn btn-success btn-sm">
                    <img src="{{asset('img/gallery/csc.jpg')}}" height ="80" width="100"> Conteo Sanguineo (CSC)</a>
                </div>
                <div class="col-sm">
                    <a href="{{route('enfermedadesCardiacas_index')}}" class="btn btn-success btn-sm">
                    <img src="{{asset('img/gallery/enfermedades_cardiacas.jpg')}}" height ="80" width="100"> Enfermedades Cardiacas</a>
                </div>
            </div>
            <br>
            <br>
        </div>
    </div>
</div>
@endsection


