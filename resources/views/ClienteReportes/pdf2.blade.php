<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{public_path('css/bootstrap.min.css')}}" rel="stylesheet" type="text">
</head>
<body>
    <div class="card mt-4">
        <div class="card-header">
              <h5 class="card-title font-weight-bold">Reportes de Inventarios "productos con cantidad menor a 10 unidades"</h4>
        </div>

        <div class="card-body">
              <table class="table table-bordered">
                  <thead>
                      <tr>
                          <th>Codigo</th> 
                          <th>Producto</th>
                          <th>Precio</th>
                          <th>Cantidad Actual</th>
                      </tr>
                  </thead>

                  <tbody>
                    @forelse ($invs as $inv)
                          <tr>
                              <td>{{ $inv->codigoProducto }}</td>
                              <td>{{ $inv->nombreItem }}</td>
                              <td>{{ $inv->precio }}</td>
                              <td>{{ $inv->cantidadActual }}</td>
                          </tr>

                          @empty

                          @endforelse
                  </tbody>
              </table>
        </div>
    </div>
</body>
</html>