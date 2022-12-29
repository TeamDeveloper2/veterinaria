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
                <th>#</th>                                
                <th>ID Venta</th>
                <th>Nombre de Cliente</th>
                <th>Codigo Producto</th>
                <th>Nombre Producto</th>
                <th>Cantidad Producto</th>
                <th>Precio Unitario</th>
                <th>Precio Total</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listaventa as $itemventa)                                                    
                <tr>
                    <td>{{$enum++}}</td>                                                                        
                    <td>{{$itemventa->id_venta}}</td>
                    <td>{{$itemventa->nombre_cliente}}</td>
                    <td>{{$itemventa->cod_producto}}</td>
                    <td>{{$itemventa->nombreItem}}</td>
                    <td>{{$itemventa->cantidad_articulo}}</td>
                    <td>{{$itemventa->precio}}</td>
                    <td>{{$itemventa->cantidad_articulo * $itemventa->precio}}</td>
                    <td>{{$itemventa->fecha_venta}}</td>
                    
                </tr>
            @endforeach
        </tbody>

    </table>


</body>
</html>