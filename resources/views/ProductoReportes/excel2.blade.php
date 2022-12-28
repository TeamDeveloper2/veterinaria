<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre del Producto </th>
                <th>Fecha de Ingreso</th>
                <th>Fecha de Vencimiento</th>
                <th>Cantidad Inicial</th>
                <th>Cantidad Final</th>
                <th>Precio</th>


            </tr>
        </thead>
        <tbody>

            @foreach ( $invs as $inv)


                <tr class="row100 head">
                    <th scope="row">{{$inv->codigoProducto}} </th>
                    <td > {{$inv->nombreItem}} </td>
                    <td > {{$inv->fecha}}</td>
                    <td > {{$inv->fecha_vencimiento}} </td>
                    <td > {{$inv->cantidadActual}}</td>
                    <td > {{$inv->cantidadTotal}} </td>
                    <td > {{$inv->precio}} </td>

                    @endforeach

        </tbody>

    </table>


</body>
</html>