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

    <title>Sitecnol</title>

    {{-- Biblioteca de bootstrap css --}}
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">


</head>
<body>
    <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="/">Inicio</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Ventas
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="<?php echo route('Ciudad.index')?>">Registrar Ciudad</a>
                                      <a class="dropdown-item" href="<?php echo route('Cliente.index')?>">Gestionar Cliente</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="<?php echo route('Proveedor.index')?>">Gestionar Proveedor</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="<?php echo route('Notaventa.index')?>">Registrar Ventas</a>
                                      <a class="dropdown-item" href="<?php echo route('NotaCompra.index')?>">Registrar Compra</a>
                                      <a class="dropdown-item" href="#">Gestionar EntregaPedido</a>
                                    </div>
                            </li>
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Pedidos
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="#">Gestionar Pedido</a>
                                          <a class="dropdown-item" href="<?php echo route('Chofer.index')?>">Gestionar Chofer</a>
                                          <a class="dropdown-item" href="<?php echo route('Vehiculo.index')?>">Gestionar Vehiculo</a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="#">Registrar Devolucion</a>
                                        </div>
                            </li>
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Inventario
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="<?php echo route('Garantia.index')?>">Registrar Garantia</a>
                                          <a class="dropdown-item" href="<?php echo route('Producto.index')?>">Gestionar Producto</a>
                                          <a class="dropdown-item" href="<?php echo route('Baja.index')?>">Registrar Baja</a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="<?php echo route('Almacen.index')?>">Gestionar Almacen</a>
                                          <a class="dropdown-item" href="<?php echo route('Categoria.index')?>">Gestionar Categoria</a>
                                          <a class="dropdown-item" href="#">Gestionar salida/ingreso almacen</a>
                                        </div>
                            </li>
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Bitacora
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="#">Bitacora Ventas</a>
                                          <a class="dropdown-item" href="#">Bitacora Compras</a>
                                          <a class="dropdown-item" href="#">Bitacora Pedidos</a>
                                        </div>
                            </li>
                      </ul>
                    </div>
            </nav>

        <nav>

     @yield('contenido')

{{-- Bibliotecas de bootstrap js --}}
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
crossorigin="anonymous"></script>

</body>
</html>
