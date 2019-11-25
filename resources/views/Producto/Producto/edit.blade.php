@extends('layout')

@section('contenido')
    <nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">EDITAR PRODUCTO</a>
    </nav>

    <form action="{{route('Producto.update',$producto->Id)}}" method="POST">
            {!!method_field('PUT')!!}
            {!! csrf_field() !!}

        <div class="container">
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="Nombre" value="{{$producto->Nombre}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Marca</label>
                <input type="text" name="Marca" value="{{$producto->Marca}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Precio</label>
                <input type="text" name="Precio" value="{{$producto->Precio}}" class="form-control">
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Guardar </button>
        <a style="display:inline" class="btn btn-secondary" href="{{route('Producto.index')}}">Volver</a>

    </form>

<hr>

@endsection
