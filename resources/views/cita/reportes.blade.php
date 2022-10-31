@extends('layouts.master')
@section('content')
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <h2>Lista de productos</h2>
            </div>
            <div class="col-md-4">
                <div class="mb-4 d-flex justify-content-end">
                    <a class="btn btn-primary" href="{{ URL::to('/admin/pdfcitas') }}">Convertir a PDF</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <caption>Lista de productos</caption>
                    <thead>
                      <tr>                        
                        <th scope="col">Nombre cliente</th>
                        <th scope="col">Nombre Mascota</th>
                        <th scope="col">Motivo</th>
                        <th scope="col">Fecha</th>
                      </tr>
                    </thead>
                        <tbody>                            
                            @foreach ($listReservaMes as $item)
                            <tr>                                
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->motivo }}</td>
                                <td>{{ $item->fecha }}</td>                                
                            </tr>
                            @endforeach
                        </tbody>
                  </table>
            </div>
        </div>
    </div>    
</body>
@endsection