@extends('layouts.master')

@section('content')
    <div class="container">


        <div class="row justify-content-center">
            <div class="col-md-8">
                <a class="card" href="{{ route('reportes.ventas') }}">
                    <div class="card-header">Reporte de Ventas</div>

                    <div class="card-body">
                        Reporte del total de ventas realizadas.
                    </div>
                </a>
            </div>
        </div>

        <br>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <a class="card" href="{{ route('reportes.productos') }}">
                    <div class="card-header">Reporte de Productos</div>

                    <div class="card-body">
                        Reporte del total de productos.
                    </div>
                </a>
            </div>
        </div>

        <br>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <a class="card" href="{{ route('reportes.clientes') }}">
                    <div class="card-header">Reporte de Clientes</div>

                    <div class="card-body">
                        Reporte de los clientes activos.
                    </div>
                </a>
            </div>
        </div>

        <br>


        <div class="row justify-content-center">
            <div class="col-md-8">
                <a class="card" href="{{ route('reportes.citas') }}">
                    <div class="card-header">Reporte de Citas</div>

                    <div class="card-body">
                        Reporte del total de Citas.
                    </div>
                </a>
            </div>
        </div>



    </div>
@endsection
