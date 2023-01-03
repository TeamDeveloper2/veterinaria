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
              <h5 class="card-title font-weight-bold">Reportes de Clientes</h4>
        </div>

        <div class="card-body">
        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre Completo </th> 
                                <th>Genero</th>
                                <th>Nacionalidad</th>
                                <th>Email</th>
                             

                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach ($cc as $cc )
                        <tr class="row100 head">
                            <th scope="row">{{ $loop->iteration }} </th>
                            <td > {{$cc->name}},{{$cc->apePaterno}}&nbsp;{{$cc->apeMaterno}} </td>
                            <td > {{$cc->Genero}} </td>
                            <td > {{$cc->Nacionalidad}} </td>
                            <td > {{$cc->email}} </td>
                           
                        @endforeach
                        </tbody>
                       
                        
                    </table>
        </div>
    </div>
</body>
</html>