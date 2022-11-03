@extends('layouts.master')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
       <h1> Lista de Emergencia</h1>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row" >
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">

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
                    <div class="row"><div class="col-sm-12 m-b-xs"><span class="text-success">Total:<input type="text" value="" disabled=»disabled»></span></div></div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre de Mascota</th>
                                <th>Nombre de Dueño</th>
                                <th>Fecha</th>
                                <th>Envenenamiento</th>
                                <th>Fractura</th>
                                <th>Enfermedad</th>
                                <th>Tratamiento</th>
                                <th>Parto</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($emerVer as $emerVer )
                            <tr class="row100 head">
                                <th scope="row" > {{ $loop->iteration }} </th>
                                <td> {{$emerVer->nombre}}  </td>
                                <td> {{$emerVer->name}},{{$emerVer->apePaterno}}&nbsp;{{$emerVer->apeMaterno}}  </td>
                                <td> {{$emerVer->fecha }}  </td>
                                @if ($emerVer->envenenamiento == 0)
                                    <td > NO </td>
                                @else
                                    <td> SI </td>
                                @endif
                                @if ($emerVer->fracturaHueso == 0)
                                    <td> NO </td>
                                @else
                                    <td> SI </td>
                                @endif
                                @if ($emerVer->enfermedad == 0)
                                    <td > NO </td>
                                @else
                                    <td> SI </td>
                                @endif
                                @if ($emerVer->tratamiento == 0)
                                    <td> NO </td>
                                @else
                                    <td> SI </td>
                                @endif
                                @if ($emerVer->parto == 0)
                                <td> NO </td>
                            @else
                                <td> SI </td>
                            @endif
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
