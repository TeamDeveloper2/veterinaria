<title>Reporte de Citas </title>

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
                    <th>Cod</th>
                    <th>Cod. Cliente</th>
                    <th>Nombre Mascota</th>
                    <th>Motivo</th>
                    <th>Fecha</th>
                    <th>Otro</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <tbody>     
                @foreach ($citas as $c)
                    <tr>
                        <td>{{$c->codcita}}</td>
                        <td>{{$c->codcita_cliente}}</td>
                        <td>{{$c->nombre_mascota}}</td>
                        <td>{{$c->motivo}}</td>
                        <td>{{$c->fecha}}</td>
                        <td>{{$c->otro}}</td>
                        <td>{{$c->telefono}}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Cod</th>
                    <th>Cod. Cita Cliente</th>
                    <th>Nombre Mascota</th>
                    <th>Motivo</th>
                    <th>Fecha</th>
                    <th>Otro</th>
                    <th>Telefono</th>
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
