@extends('layout')

@section('contenido')
    <nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">REGISTRAR PRODUCTO</a>
    </nav>

    <form action="{{route('Producto.store')}}" method="POST">
        {!! csrf_field() !!}
        <div class="container">
            <div class="form-group">
                <label for="">Codigo Producto</label>
                <input type="text" name="Codigo" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="Nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Marca</label>
                <input type="text" name="Marca" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Precio</label>
                <input type="text" name="Precio" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Id Garantia</label>
                <input type="text" name="IdGarantia" class="form-control">
            </div>
        </div>
         <input type="submit" class="btn btn-primary" value="Enviar">
        <a class="btn btn-secondary" href="{{route('Producto.index')}}">Volver</a>
    </form>

    <hr>

@endsection
