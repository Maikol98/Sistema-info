@extends('layout')

@section('contenido')
    <h1>Lo sentimos no tenemos suficiente stock</h1>
    <a class="btn btn-primary" href="<?php echo route('Notaventa.index')?>" role="button">Volver</a>
    <div class="container">
        <style>
            body {
                background-image: url("https://media.istockphoto.com/photos/sorry-message-picture-id468145018");
            }

        </style>

    </div>

@endsection
