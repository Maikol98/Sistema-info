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
        <h1>REPORTE DE VENTAS</h1>
    </div>
    <h3></h3>
    <table  width="80%" border="1">
        <thead>
            <tr>
                <th scope="col">Carnet</th>
                <th scope="col">Nombre</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $datosCliente)
                <tr>
                <th class="text-white" scope="row">{{$datosCliente->Ci_Cliente}}</th>
                <td class="text-white">{{$datosCliente->Nombre}}</td>
                <td class="text-white">{{$datosCliente->Direccion}}</td>
                <td class="text-white">{{$datosCliente->Telefono}}</td>
                <td class="text-white">{{$datosCliente->Correo}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
