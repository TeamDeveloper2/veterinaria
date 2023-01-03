<title>Reporte de Clientes </title>

@extends('layouts.master')

@section('content')
    <!DOCTYPE html>

    <head>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    </head>

    <body>
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Ap. Paterno</th>
                    <th>Ap. Materno</th>
                    <th>Fecha Nacimiento</th>
                    <th>Genero</th>
                    <th>Nacionalidad</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>     
                @foreach ($clientes as $c)
                    <tr>
                        <td>{{$c->name}}</td>
                        <td>{{$c->apePaterno}}</td>
                        <td>{{$c->apeMaterno}}</td>
                        <td>{{$c->fechNacimiento}}</td>
                        <td>{{$c->Genero}}</td>
                        <td>{{$c->Nacionalidad}}</td>
                        <td>{{$c->email}}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Nombre</th>
                    <th>Ap. Paterno</th>
                    <th>Ap. Materno</th>
                    <th>Fecha Nacimiento</th>
                    <th>Genero</th>
                    <th>Nacionalidad</th>
                    <th>Email</th>
                </tr>
            </tfoot>
        </table>



        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

        <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#example').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'excel', 'pdf'
                    ]
                });
            });
        </script>
    </body>

    </html>
@endsection
