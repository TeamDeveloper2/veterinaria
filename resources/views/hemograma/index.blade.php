@extends('layouts.master')
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Convergence" />

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2 class="titulo" class style="background-color: #1B4F72">
            <font color="FBFBFB ">Hemograma</font>

        <div class="container">
        <br>
          <a href="#ventana1" class="btn btn-success " data-toggle="modal">PMB</a>
          <a href="#ventana2" class="btn btn-success " data-toggle="modal">CSC</a>
          <a href="#ventana3" class="btn btn-success " data-toggle="modal">EC</a>

          <div class="modal fade" id="ventana1">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">PANEL METABOLICO BASICO</h4>
                    <button tyle="button"  class="close"  data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="formFile" class="form-label"></label>
                        <input class="form-control" type="file" id="formFile">
                      </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-default">Guardar Cambios</button>
                </div>
            </div>
            </div>
          </div>


          <div class="modal fade" id="ventana2">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">CONTEO SANGUINEO COMPLETO</h4>
                    <button tyle="button"  class="close"  data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="formFile" class="form-label"></label>
                        <input class="form-control" type="file" id="formFile">
                      </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-default">Guardar Cambios</button>
                </div>
            </div>
            </div>
          </div>

          <div class="modal fade" id="ventana3">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">ENFERMEDADES CARDIACAS</h4>
                    <button tyle="button"  class="close"  data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="formFile" class="form-label"></label>
                        <input class="form-control" type="file" id="formFile">
                      </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-default">Guardar Cambios</button>
                </div>
            </div>
            </div>
          </div>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row" >
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <a class="btn btn-primary" href="">Agregar</a>
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
                            <div class="col-sm-2 m-b-xs" style="float: right;">--</div>
                        </div>
                    </form>
                    <div class="row"><div class="col-sm-12 m-b-xs"><span class="text-success">Total: <strong>00</strong></span></div></div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>C</th>
                                <th>Data</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>

                                <tr>
                                    <td>1</td>
                                    <td></td>
                                    <td >
                                        <a href="" title="Mostrar"><img width="17px" src="{{asset('img/iconos/mostrar.png')}}" alt="Mostrar"></a>
                                        <a href="" title="Modificar"><img width="17px" src="{{asset('img/iconos/modificar.png')}}" alt="Modificar"></a>
                                        <a data-ruta="" class="btn-eliminar" title="Eliminar"><img width="17px" src="{{asset('img/iconos/eliminar.png')}}" alt="Eliminar"></a>
                                    </td>
                                </tr>

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


