@extends('layouts.master')


@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Reporte de Ventas Por Cajero</h2>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row" >
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <a class="btn btn-primary" href=>Exportar a PDF</a>
                    <div class="ibox-tools"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></div>

                    <a class="btn btn-primary" href=>Exportar a XLS</a>
                    <div class="ibox-tools"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></div>

                    <a class="btn btn-primary" onclick="window.print()" href=>Exportar a HTML</a>
                    <div class="ibox-tools"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></div>
                </div>
                <div class="ibox-content">
                    <form name="formBuscar" action="" method="get">
                        <div class="row">
                            <div class="col-sm-5 m-b-xs">

                                <div class="group">
                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">Fecha de Inicio</label>

                                        <div class="col-md-6">
                                            <input id="name" type="date" class="form-control" name="fechaIni" value="" required autocomplete="name" autofocus>
                                        </div>
                                    </br>
                                        <label for="name" class="col-md-4 col-form-label text-md-end">Fecha Fin</label>

                                        <div class="col-md-6">
                                            <input id="name" type="date" class="form-control" name="fechaIni" value="" required autocomplete="name" autofocus>
                                        </div>
                                    </div>


                                </div>
                            </br>
                                <div class="-group">

                                    <input placeholder="Buscar" type="text" class="form-control form-control-sm" name="buscar" value="">
                                    <span class="-group-append"> <button type="submit" class="btn btn-sm btn-success">Buscar</button> </span>
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
                                <th>Nombre de Cajero </th>
                                <th>Apertura de Caja</th>
                                <th>Cierre de Caja</th>
                                <th>Devoluciones </th>


                            </tr>
                        </thead>
                        <tbody>


                                <tr class="row100 head">
                                    <th scope="row"> </th>
                                    <td > e </td>
                                    <td > 3 </td>
                                    <td > 4 </td>
                                    <td > 4</td>




                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
