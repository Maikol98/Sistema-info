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
</head>
<body>
    <header>
        <?php function activeMenu($url){
            return request()->is($url)? 'active':'';
        }?>

        <nav>
            <a class="{{activeMenu('/')}}" href="/">Inicio</a>

            <a class="{{activeMenu('Cliente')}}" href="<?php echo route('Cliente')?>">Cliente</a>

            <a class="{{activeMenu('Producto')}}" href="<?php echo route('Producto')?>">Producto</a>

            <a class="{{activeMenu('Compras')}}" href="<?php echo route('Compras')?>">Compras</a>

            <a class="{{activeMenu('Proveedor')}}" href="<?php echo route('Proveedor')?>">Proveedor</a>

            <a class="{{activeMenu('Ventas')}}" href="<?php echo route('Ventas')?>">Ventas</a>
        </nav>
        <hr>
     </header>
     @yield('contenido')

</body>
</html>
