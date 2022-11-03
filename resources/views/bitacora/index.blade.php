@extends('layouts.master')
<!-- section('titulo', $parControl['titulo']) -->

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Inicio</h2>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row" >
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">

                    <div class="ibox-tools"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></div>
                </div>
                <div class="ibox-content">
                    <form name="formBuscar" action="" method="get">
                        <div class="row">
                            <div class="col-sm-3 m-b-xs">
                            </div>
                            <div class="col-sm-7 m-b-xs" >&nbsp;</div>
                            <div class="col-sm-2 m-b-xs" style="float: right;"></div>
                        </div>
                    </form>
                     <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre </th>
                                <th>Accion</th>
                                <th>Sujeto</th>

                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>

                               <!-- <tr>
                                    <td>1</td>
                                    <td>kitty</td>
                                    <td>Hembra</td>
                                    <td>Siames</td>
                                    <td>negro con crema</td>
                                    <td>1.5</td>
                                    <td>Gato</td></td>
                                    <td>1/1/2022</td>
                                    <td>1/1/2022</td>
                                    <td>
                                        <a href="" title="Mostrar"><img width="17px" src="{{asset('img/iconos/mostrar.png')}}" alt="Mostrar"></a>
                                        <a href="" title="Modificar"><img width="17px" src="{{asset('img/iconos/modificar.png')}}" alt="Modificar"></a>
                                        <a  class="btn-eliminar" title="Eliminar"><img width="17px" src="{{asset('img/iconos/eliminar.png')}}" alt="Eliminar"></a>
                                    </td>
                                </tr> -->
                                @foreach ($bitacora1 as $bitacora1 )
                                <tr class="row100 head">
                                    <th scope="row">{{ $loop->iteration }} </th>
                                    <td > {{$bitacora1->name}}  </td>
                                    <td > {{$bitacora1->descripcion}} </td>
                                    <td > {{$bitacora1->long_name}} </td>


                                @endforeach

                        </tbody>
                        <form name="formEliminar" id="formEliminar"  action="" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Eliminar" hidden="">
                        </form>
                        <script>
                            $(document).ready(function(){
                                $('.btn-eliminar').click(function(){
                                    var ruta=$(this).data('ruta');
                                    var texto = $(this).closest('td').data('texto');
                                    var esEliminar = confirm('Esta seguro de eliminar el registro "'+texto+'"');
                                    if(esEliminar){
                                        $('#formEliminar').attr('action',ruta);
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
@stop
