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
              <h5 class="card-title font-weight-bold">Reportes de Citas</h4>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID Cliente</th>
                        <th>Cliente</th>
                        <th>Mascota</th>
                        <th>Motivo</th>
                        <th>Telefono</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($getdatoslista as $dato)
                    <tr>
                        <th>{{$contador++}}</th>
                        <td>{{$dato->id}}</td>
                        <td>{{$dato->name}}</td>
                        <td>{{$dato->nombre_mascota}}</td>
                        <td>{{$dato->motivo}}</td>
                        <td>{{$dato->telefono}}</td>
                        <td>{{$dato->fecha}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>