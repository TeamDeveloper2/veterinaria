@extends('layouts.master')
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Convergence" />
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2 class="titulo" class style="background-color: #1B4F72">
                <font color="FBFBFB ">Citas</font>
        </div>
        <img src="https://us.123rf.com/450wm/olegdudko/olegdudko1507/olegdudko150700686/41879950-veterinario-perro-veterinario-.jpg?ver=6"
            class="rounded mx-auto d-block" alt="" width="600" height=" 180">

            <div>
                <img src="{{asset('img/vim3.png')}}"  alt="" style="width:130px" >

            </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <a class="btn btn-primary" href="">Agregar</a>
                        <div class="ibox-tools"> <a class="collapse-link"><i class="fa fa-chevron-up"></i></a></div>
                    </div>
                    <div class="ibox-content">
                        <form name="formBuscar" action="" method="get">
                            <div class="row"class style="background-color: #1B4F72">
                                <div class="col-sm-3 m-b-xs">
                                    <div class="input-group">
                                        <input placeholder="Buscar" type="text" class="form-control form-control-sm"
                                            name="buscar" value="">
                                        <span class="input-group-append"> <button type="submit"
                                                class="btn btn-sm btn-success">Buscar</button> </span>
                                    </div>
                                </div>
                                <div class="col-sm-5 m-b-xs">&nbsp;</div>
                                <div class="col-sm-2 m-b-xs" style="float: right;"></div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-sm-12 m-b-xs"> <span class="text-success">Total: </span> <strong> 00 </strong>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre del Propietario</th>
                                    <th>Nombre de tu mascota </th>
                                    <th>Teléfono</th>
                                    <th>Genero</th>
                                    <th>Email1</th>
                                    <th>Mensaje</th>
                                    <th>Creado</th>
                                    <th>Modificado</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <th>1</th>
                                    <td>Carlos Castro</td>
                                    <td>Dogui</td>
                                    <td>63452422</td>
                                    <td>Macho</td>
                                    <td>carlos21@gmail.com</td>
                                    <td> Vacuna contra la rabia canina</td>
                                    <td>18/09/2022</td>
                                    <td>18/09/2022</td>
                                    <td>
                                        <a href="" title="Mostrar"><img width="30px"
                                                src="{{ asset('img/iconos/mostrar.png') }}" alt="Mostrar"></a>
                                        <a href="" title="Modificar"><img width="30px"
                                                src="{{ asset('img/iconos/modificar.png') }}" alt="Modificar"></a>
                                        <a class="btn-eliminar" title="Eliminar"><img width="17px"
                                                src="{{ asset('img/iconos/eliminar.png') }}" alt="Eliminar"></a>
                                    </td>
                                </tr>

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
                                        var esEliminar = confirm('Seguro de elimnar la cita "' + texto + '"');
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
