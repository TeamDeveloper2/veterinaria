<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Generate PDF Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>Codigo de venta: {{ $cod_venta }}</p>
    <p>CI del cliente: {{ $CI_cliente }}</p>
    <p>Nombre Cliente: {{ $Nombre_Cliente }}</p>
    <p>Fecha de emision: {{ $date }}</p>
    
    <p>productos: </p>
    <table class="table table-bordered">
        <tr>
            <th>Cod Producto</th>
            <th>Nombre Productor</th>
            <th>Cantidad</th>
            <th>Precio</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->cod_producto}}</td>            
            <td>{{ $user->nombreItem}}</td>            
            <td>{{ $user->cantidad_articulos}}</td>            
            <td>{{ $user->precio}}</td> 
            <td style="visibility:collapse; display:none;">{{@$totalPagar= $totalPagar + $user->precio}}</td>                                  
        </tr>
        @endforeach
    </table>    
    <p>total: {{@$totalPagar}} Bs</p>
</body>
</html>