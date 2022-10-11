@extends('layouts.master')
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Convergence" />
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2 class="titulo" class style="background-color: #1B4F72">
                <font color="FBFBFB ">Clientes</font>
        </div>
        <div>
            <img src="{{asset('img/vim3.png')}}"  alt="" style="width:130px" >

        </div>


    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <a class="btn btn-primary" href={{route('homecnew')}}>Agregar</a>
                        <div class="ibox-tools"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></div>
                    </div>
                    <div class="ibox-content">
                        <form name="formBuscar" action="" method="get">
                            <div class="row" class style="background-color: #1B4F72">
                                <div class="col-sm-3 m-b-xs">
                                    <div class="input-group">
                                        <input placeholder="Buscar" type="text" class="form-control form-control-sm"
                                            name="buscar" value="">
                                        <span class="input-group-append"> <button type="submit"
                                                class="btn btn-sm btn-success">Buscar</button> </span>
                                    </div>
                                </div>
                                <div class="col-sm-7 m-b-xs">&nbsp;</div>
                                <div class="col-sm-2 m-b-xs" style="float: right;"></div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-sm-12 m-b-xs"><span class="text-success">Total: <strong>00</strong></span></div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombres </th>
                                    <th>Teléfono</th>
                                    <th>Dirección</th>
                                    <th>Correo</th>
                                    <th>Creado</th>
                                    <th>Modificado</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
<!--
                                <tr>
                                    <td>1</td>
                                    <td>Angela Robles</td>
                                    <td>64530289</td>
                                    <td>Los lotes</td>
                                    <td>robles345@gmail.com</td>
                                    <td>7/8/2022</td>
                                    <td>7/8/2022</td>
                                    <td>
                                        <a href="" title="Mostrar"><img width="17px"
                                                src="{{ asset('img/iconos/mostrar.png') }}" alt="Mostrar"></a>
                                        <a href="" title="Modificar"><img width="17px"
                                                src="{{ asset('img/iconos/modificar.png') }}" alt="Modificar"></a>
                                        <a class="btn-eliminar" title="Eliminar"><img width="17px"
                                                src="{{ asset('img/iconos/eliminar.png') }}" alt="Eliminar"></a>
                                    </td>
                                </tr>
                            -->
                            @foreach ($cc as $cc )
                            <tr class="row100 head">
                                <th scope="row" > {{ $loop->iteration }} </th>
                                <td > {{$cc->name , $cc->apPaterno}}  </td>
                                <td > {{$cc->fechaNacimiento}} </td>
                                <td > {{$cc->Genero}} </td>
                                <td > {{$cc->Nacionalidad}} </td>
                                <td > {{$cc->email}} </td>
                                <td > {{$cc->created_at}} </td>
                                <td > {{$cc->updated_at}} </td>
                                <td>
                                    <a href= "{{url('/admin/cliente/mostrar/'.$cc->id) }}" title="Mostrar"><img width="17px" src="{{asset('img/iconos/mostrar.png')}}" alt="Mostrar"></a>
                                    <a href="{{url('/admin/cliente/modificar/'.$cc->id) }}" title="Modificar"><img width="17px" src="{{asset('img/iconos/modificar.png')}}" alt="Modificar"></a>
                                    <a  class="btn-eliminar" title="Eliminar"><img width="17px" src="{{asset('img/iconos/eliminar.png')}}" alt="Eliminar"></a>
                                </td>
                            @endforeach

                            </tbody>
                            <form name="formEliminar" id="formEliminar" action="" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Eliminar" hidden="">
                            </form>
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
        </div>
    </div>
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
