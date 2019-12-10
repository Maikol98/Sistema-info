@extends('layout')

@section('contenido')
<div class="container">
        <nav class="navbar navbar-dark bg-LIGTH">
               <h1 class="text-white">BIENVENIDOS A SITECNOL</h1>
            </nav>

    <div class="card-deck">
        <div class="card border-secondary mb-3" style="max-width: 18rem;">
          <img src="https://st2.depositphotos.com/1734074/11386/v/950/depositphotos_113862858-stock-illustration-people-avatars-set-flat-design.jpg" class="card-img-top" alt="...">
          <div class="card-body text-info">
             <h5 class="card-title">REGISTRAR CLIENTES</h5>
             <P>Aqui usted podra registrar a los clientes de manera rapida</P>
            <a href="<?php echo route('Cliente.create')?>" class="btn btn-primary btn-lg btn-block">Registrar</a>
            </div>
        </div>

        <div class="card border-secondary mb-3" style="max-width: 18rem;">
            <img src="https://3condoresinformatica.files.wordpress.com/2015/06/productos-informaticos-gagdet2.jpg" class="card-img-top" alt="...">
            <div class="card-body text-info">
            <h5 class="card-title">REGISTRAR PRODUCTOS</h5>
            <P>Aqui usted podra registrar a los Productos de manera rapida y sencilla</P>
            <a href="<?php echo route('Cliente.create')?>" class="btn btn-primary btn-lg btn-block">Registrar</a>
          </div>
        </div>
        <div class="card border-secondary mb-3" style="max-width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body text-info">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>

</div>
@endsection
