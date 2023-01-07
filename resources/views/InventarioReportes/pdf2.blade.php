<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{public_path('css/bootstrap.min.css')}}" rel="stylesheet" type="text">
    <style>

.table > caption + thead > tr:first-child > td,
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > td,
.table > thead:first-child > tr:first-child > th {
  border-top: 0;
}
.table-bordered {
  border: 1px solid #000000;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  background-color: #9191df;
  border-bottom-width: 1px;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 1px solid #000000;
}
.table > thead > tr > th {
  border-bottom: 1px solid #47218d;
  vertical-align: bottom;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  border-top: 1px solid #000000;
  line-height: 1.42857;
  padding: 8px;
  vertical-align: top;
}
.ibox-content h1,
.ibox-content h2,
.ibox-content h3,
.ibox-content h4,
.ibox-content h5,
.ibox-title h1,
.ibox-title h2,
.ibox-title h3,
.ibox-title h4,
.ibox-title h5 {
  margin-top: 5px;
}
.ibox-content.text-box {
  padding-bottom: 0;
  padding-top: 15px;
}
.ibox {
  clear: both;
  margin-bottom: 25px;
  margin-top: 0;
  padding: 0;
}
.ibox.collapsed .ibox-content {
  display: none;
}
.invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }
.invoice-box table tr.information table td {
            padding-bottom: 40px;
        }
    </style>
</head>
<body>
<div class="ibox ">
    <div class="card mt-4">
        <div class="card-header">
            <table>
                <tr>
                    <td>
                        <b>Veterinaria "El Cristo"</b><br />
                        CASA MATRIZ<br />
                        Av. Virgen de Lujan<br />
                        Pampa de la Isla <br />
                        Telf.: 785-15818 Santa Cruz - Bolivia
                    </td>
                    <td></td>
                    <td> </td>
                    <td align="right" >
                       

                    </td>
                </tr>
            </table>
              <h5 class="card-title font-weight-bold text-center">Reportes de Inventario</h4>
        </div>

    
        

    <div class="ibox-content">
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