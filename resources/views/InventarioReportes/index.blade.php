@extends('layouts.master')
@section('content')
<h1>Index</h1>
<div class="container py-5">
    <div class="row">
        <div class="col-xl-12 text-right">
            <a href="{{ route('download-pdf') }}" class="btn btn-success btn-sm">Export to PDF</a>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
              <h5 class="card-title font-weight-bold">Reportes de Inventarios</h4>
        </div>

        <div class="card-body">
              <table class="table table-bordered">
                  <thead>
                      <tr>
                          <th>Codigo</th>
                          <th>Producto</th>
                          <th>Precio</th>
                      </tr>
                  </thead>

                  <tbody>
                      @forelse ($inv as $inv)
                          <tr>
                              <td>{{ $inv->codigoProducto }}</td>
                              <td>{{ $inv->nombreItem }}</td>
                              <td>{{ $inv->precio }}</td>
                          </tr>
                      @empty

                      @endforelse
                  </tbody>
              </table>
        </div>
    </div>
</div>
@stop