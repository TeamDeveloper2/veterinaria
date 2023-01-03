@extends('layouts.master')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
       <h1> Lista de Paciente con Tratamiento</h1>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row" >
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                  <!--  <a class="btn btn-primary" href="">Agregar</a>-->
                    <div class="ibox-tools"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></div>
                </div>

                <div class="ibox-content">
                    <form name="formBuscar" action="" method="get">
                        <div class="row">
                            <div class="col-sm-3 m-b-xs">
                                <div class="-group">
                                    <input placeholder="Buscar" type="text" class="form-control form-control-sm" name="buscar" value="">
                                    <span class="-group-append"> <button type="submit" class="btn btn-sm btn-success">Buscar</button> </span>
                                </div>
                            </div>
                            <div class="col-sm-7 m-b-xs" >&nbsp;</div>
                            <div class="col-sm-2 m-b-xs" style="float: right;">--</div>
                        </div>
                    </form>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre de Mascota</th>
                                <th>Especie</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($m as $m)
                            <tr class="row100 head">
                            <th scope="row" > {{ $loop->iteration }}  </th>
                            <td>{{$m->nombre}}</td>
                            <td>{{$m->especie}}</td>
                            <td >
                                <a href= "{{url('/admin/tratamiento/mostrar/'.$m->codmascota) }}" title="Mostrar Tratamiento"><img width="17px" src="{{asset('img/iconos/mostrar.png')}}" alt="Mostrar"></a>
                                <a href="{{url('/admin/tratamiento/modificar/'.$m->codmascota ) }}" title="Modificar Tratamiento"><img width="17px" src="{{asset('img/iconos/modificar.png')}}" alt="Modificar"></a>
                                <!--<a data-ruta="" class="btn-eliminar" title="Eliminar"><img width="17px" src="{{asset('img/iconos/eliminar.png')}}" alt="Eliminar"></a>-->
                            </td>
                        </tr>
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
