@extends('layouts.master')
@section('content')
<div class="container py-5 text-center ">
    <h1 class="mb-4">Reporte de Clientes</h1>
    <div class="row">
        <div class="col-xl-12 text-right">

            </div>

                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Reporte PDF
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <li><a class="dropdown-item" href="{{ route('reporte-cliente.pdf1') }}">Reporte Completo</a></li>
                        <li><a class="dropdown-item" href="{{ route('reporte-cliente.pdf2') }}">Reporte Semana Pasada </a></li>
                        <li><a class="dropdown-item" href="{{ route('reporte-cliente.pdf3') }}">Reporte Mes Pasado</a></li>
                        
                        </ul>   
                    </div>

                    <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Reportes Exel
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <li><a class="dropdown-item" href="">Proximos a vencer</a></li>
                        <li><a class="dropdown-item" href="">Reportes por stock</a></li>
                    </ul>
                    </div>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Reportes HTML
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <li><a class="btn btn-primary" onclick="window.print() ">Exportar a HTML</a></li>
                        </ul>
                        </div>

                </div>
            
            </div>
       
 
            <div class="card mt-4">
                <div class="card-header">
                    <h5 class="card-title font-weight-bold text-center">Reportes de Clientes</h4>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre Completo </th>
                                <th>Fecha Nacimiento</th>
                                <th>Genero</th>
                                <th>Nacionalidad</th>
                                <th>Email</th>
                             

                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach ($cc as $cc )
                        <tr class="row100 head">
                            <th scope="row">{{ $loop->iteration }} </th>
                            <td > {{$cc->name}},{{$cc->apePaterno}}&nbsp;{{$cc->apeMaterno}} </td>
                            <td > {{$cc->fechNacimiento}} </td>
                            <td > {{$cc->Genero}} </td>
                            <td > {{$cc->Nacionalidad}} </td>
                            <td > {{$cc->email}} </td>
                           
                        @endforeach
                        </tbody>
                       
                        <script>
                            $(document).ready(function() {
                                $('.btn-eliminar').click(function() {
                                    var ruta = $(this).data('ruta');
                                    var texto = $(this).closest('td').data('texto');
                                    var esEliminar = confirm('Esta seguro de eliminar el registro "' + texto + '"');
                                    if (esEliminar) {
                                        $('#formEliminar').attr('action', ruta);
                                        document.formEliminar.submit();
                                    }

                                });
                            });
                        </script>
                    </table>
                </div>
            </div>
</div>
@stop