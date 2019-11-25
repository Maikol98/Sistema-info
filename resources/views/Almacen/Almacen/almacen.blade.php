@extends('layout')


@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">REGISTRAR ALMACEN</a>
    </nav>
<p></p>
    <form action="{{route('Almacen.store')}}" method="POST">

        {!! csrf_field() !!}
        <div class="container">
                <div class="form-group">
                        <label for="">Dimension</label>
                        <input type="text" name="Dimension" class="form-control">
                </div>
                <div class="form-group">
                         <label for="">Capacidad</label>
                         <input type="text" name="Capacidad" class="form-control">
                </div>
                <div class="form-group">
                        <label for="">Direccion</label>
                        <input type="text" name="Direccion" class="form-control">
                </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar </button>
        <a style="display:inline" class="btn btn-primary" href="{{route('Almacen.index')}}">Listado de Almacen</a>
    </form>
    <br>
@endsection
