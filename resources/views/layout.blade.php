<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Sitecnol</title>

    {{-- Biblioteca de bootstrap css --}}
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">


</head>
<body>

        <style>
                body {
                    background-image: url("https://echozas.files.wordpress.com/2012/04/madera-vieja.jpg");
                }

            </style>

    <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="/">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPr9copNZtEI7bFWYW0tubZj5ghQmJW57CKJnP0yVNpEspDkoF&s" width="30" height="30" class="d-inline-block align-top" alt="">
                            Inicio
                          </a>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav">
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
                                          <a class="dropdown-item" href="<?php echo route('Pedido.index') ?>">Gestionar Pedido</a>
                                          <a class="dropdown-item" href="<?php echo route('Chofer.index')?>">Gestionar Chofer</a>
                                          <a class="dropdown-item" href="<?php echo route('Vehiculo.index')?>">Gestionar Vehiculo</a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="<?php echo route('Devolucion.lista')?>">Registrar Devolucion</a>
                                        </div>
                            </li>
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Inventario
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="<?php echo route('Producto.index')?>">Gestionar Producto</a>
                                          <a class="dropdown-item" href="<?php echo route('Baja.index')?>">Registrar Baja</a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="<?php echo route('Almacen.index')?>">Gestionar Almacen</a>
                                          <a class="dropdown-item" href="<?php echo route('Categoria.index')?>">Gestionar Categoria</a>
                                          <a class="dropdown-item" href="<?php echo route('Ingresosalida.index')?>">Gestionar salida/ingreso almacen</a>
                                        </div>
                            </li>
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Bitacora
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="<?php echo route('Bitacora.index')?>">Bitacora Ventas</a>
                                          <a class="dropdown-item" href="#">Bitacora Compras</a>
                                          <a class="dropdown-item" href="#">Bitacora Pedidos</a>
                                        </div>
                            </li>


                              <ul class="navbar-right">
                                    @if (auth()->guest())
                                        <a class="nav-item nav-link" href="/login">Login</a>
                                    @else
                                        <a class="nav-item nav-link" href="/logout">Cerrar Sesion de {{auth()->user()->name}}</a>
                                    @endif
                            </ul>
                      </ul>
                    </div>
            </nav>

        <nav>

     @yield('contenido')





{{-- Bibliotecas de bootstrap js --}}
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
crossorigin="anonymous">

<script
src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
crossorigin="anonymous"></script>
<script
src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"></script>


</body>
</html>
