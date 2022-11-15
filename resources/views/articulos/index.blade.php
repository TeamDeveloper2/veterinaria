@extends('layouts.master')
<!-- section('titulo', $parControl['titulo']) -->

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Lista de Articulos </h2>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row" >
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-content">
                  <!--  <div class="ibox-title">
                        <a class="btn btn-primary" href=>Agregar Articulo</a>
                        <div class="ibox-tools"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></div>
                    </div>-->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Agregar Articulo
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Articulo</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{route('articuloNewP')}}" method="post">
                                {{csrf_field()}}
                                @method('POST')
                            <div class="modal-body">
                                <div class="col-sm-10">
                                    <label class="checkbox-inline">
                                        <input type="radio" class="checkbox_1" value="0" name="value1">Medicamentos
                                    </label>
                                        <br>
                                    <label class="checkbox-inline">
                                        <input type="radio" class="checkbox_1" value="1" name="value1">Alimentos
                                    </label>
                                    <br>
                                    <label class="checkbox-inline">
                                        <input type="radio" class="checkbox_1" value="2" name="value1">Utensilios
                                    </label>
                                    <br>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-primary">Guardar cambios</button>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    <br>
                    <br>
                     <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nro #</th>
                                <th>Codigo Articulo</th>
                                <th>Nombre </th>
                                <th>Detalle</th>
                                <th>Cantidad</th>
                                <!--<th>&nbsp;</th>-->
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
                                @foreach ($inv as $inv )
                                <tr class="row100 head">
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{$inv->codigoProducto}}</td>
                                    <td>{{$inv->nombreItem}}</td>
                                    <td>{{$inv->detalle}}</td>
                                    <td>{{$inv->cantidadActual}}</td>

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

