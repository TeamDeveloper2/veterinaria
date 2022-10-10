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
                    <a class="btn btn-primary" href={{route('homenew')}}>Agregar</a>
                    <div class="ibox-tools"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></div>
                </div>
                <div class="ibox-content">
                    <form name="formBuscar" action="" method="get">
                        <div class="row">
                            <div class="col-sm-3 m-b-xs">
                                <div class="input-group">
                                    <input placeholder="Buscar" type="text" class="form-control form-control-sm" name="buscar" value="">
                                    <span class="input-group-append"> <button type="submit" class="btn btn-sm btn-success">Buscar</button> </span>
                                </div>
                            </div>
                            <div class="col-sm-7 m-b-xs" >&nbsp;</div>
                            <div class="col-sm-2 m-b-xs" style="float: right;"></div>
                        </div>
                    </form>
                    <div class="row"><div class="col-sm-12 m-b-xs"><span class="text-success">Total: <strong>00</strong></span></div></div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre </th>
                                <th>Genero</th>
                                <th>Raza</th>
                                <th>Color</th>
                                <th>Peso</th>
                                <th>Especie</th>
                                <th>Creado</th>
                                <th>Modificado</th>
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
                                @foreach ($m as $m1 )
                                <tr class="row100 head">
                                    <th scope="row" > {{ $loop->iteration }} </th>
                                    <td > {{$m1->nombre}}  </td>
                                    <td > {{$m1->genero}} </td>
                                    <td > {{$m1->raza}} </td>
                                    <td > {{$m1->color}} </td>
                                    <td > {{$m1->peso}} </td>
                                    <td > {{$m1->especie}} </td>
                                    <td > {{$m1->created_at}} </td>
                                    <td > {{$m1->updated_at}} </td>
                                    <td>
                                        <a href= "{{url('/admin/mascota/mostrar/'.$m1->codmascota) }}" title="Mostrar"><img width="17px" src="{{asset('img/iconos/mostrar.png')}}" alt="Mostrar"></a>
                                        <a href="{{url('/admin/mascota/modificar/'.$m1->codmascota) }}" title="Modificar"><img width="17px" src="{{asset('img/iconos/modificar.png')}}" alt="Modificar"></a>
                                        <a  class="btn-eliminar" title="Eliminar"><img width="17px" src="{{asset('img/iconos/eliminar.png')}}" alt="Eliminar"></a>
                                    </td>
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
