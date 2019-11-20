<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        .active{
            text-decoration: none;
            color:green;

        }
    </style>

    <title>Mi sitio</title>

    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
     crossorigin="anonymous">
     
</head>
<body>
    <header>

        <?php function activeMenu($url){
            return request()->is($url)? 'active':'';
        }?>

        <nav>
            <a class="{{activeMenu('/')}}" href="/">Inicio</a>

            <a class="{{activeMenu('Cliente/create')}}" href="<?php echo route('Cliente.create')?>">Cliente</a>

            <a class="{{activeMenu('Cliente')}}" href="<?php echo route('Cliente.index')?>">Listar Cliente</a>

            <a class="{{activeMenu('Producto/create')}}" href="<?php echo route('Producto.create')?>">Producto</a>

            <a class="{{activeMenu('Proveedor/create')}}" href="<?php echo route('Proveedor.create')?>">Proveedor</a>

            <a class="{{activeMenu('Ventas/create')}}" href="<?php echo route('Notaventa.create')?>">Ventas</a>

            <a class="{{activeMenu('Producto')}}" href="<?php echo route('Producto.index')?>">Listar Producto</a>

        </nav>
        <hr>
     </header>

     @yield('contenido')

</body>
</html>
