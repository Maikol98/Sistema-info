<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div class="text-center">
        <h1>SITECNOL</h1>
        <h1>REPORTE DE COMPRAS</h1>
    </div>
    <h3></h3>
    <table  width="80%" border="1">
        <thead>
            <tr>'Id','PrecioTotal','FechaVenta','Nombre','Cantidad'
                <th scope="col">ID</th>
                <th scope="col">Fecha Compra</th>
                <th scope="col">Precio Unitario</th>
                <th scope="col">Nombre Producto</th>
                <th scope="col">Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dato as $datos)
                <tr>
                <th class="text-white" scope="row">{{$datos->Id}}</th>
                <td class="text-white" scope="raw">{{$datos->FechaCompra}}</td>
                <td class="text-white" scope="raw">{{$datos->PrecioUnitario}}</td>
                <td class="text-white" scope="raw">{{$datos->Nombre}}</td>
                <td class="text-white" scope="raw">{{$datos->Cantidad}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
