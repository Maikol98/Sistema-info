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
        <h1>REPORTE DE LOS PEDIDOS</h1>
    </div>
    <h3></h3>
    <table  width="100%" border="1">
        <thead>
            <tr>'pedido.Id','PrecioTotal','FechaPedido','FechaEntrega','Direccion','Estado','Nombre','Cantidad','SubTotal'
                <th scope="col">ID</th>
                <th scope="col">Fecha Pedido</th>
                <th scope="col">Fecha Entrega</th>
                <th scope="col">Direccion</th>
                <th scope="col">Estado</th>
                <th scope="col">Nombre Producto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">SubTotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dato as $datos)
                <tr>
                <th class="text-white" scope="row">{{$datos->Id}}</th>
                <td class="text-white" scope="raw">{{$datos->FechaPedido}}</td>
                <td class="text-white" scope="raw">{{$datos->FechaEntrega}}</td>
                <td class="text-white" scope="raw">{{$datos->Direccion}}</td>
                <td class="text-white" scope="raw">{{$datos->Estado}}</td>
                <td class="text-white" scope="raw">{{$datos->Nombre}}</td>
                <td class="text-white" scope="raw">{{$datos->Cantidad}}</td>
                <td class="text-white" scope="raw">{{$datos->SubTotal}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
