@extends('layout')
@section('contenido')

<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">REGISTRAR DISTRITO</a>
    </nav>
<p></p>

<form action="{{route('Distrito.store',$ciudad)}}" method="post">

    {!! csrf_field() !!}
    <div class="container">
            <div class="form-group">
                    <label for="">Nro Distrito</label>
                    <input type="text" name="NroDistrito" class="form-control">
            </div>
            <div class="form-group">
                     <label for="">Nombre</label>
                     <input type="text" name="Nombre" class="form-control">
            </div>
            <div class="form-group">
                    <label for="">Codigo Ciudad</label>
                <input type="text" name="CodCiudad" value="{{$ciudad}}" class="form-control">
            </div>
    </div>
    <button type="submit" class="btn btn-primary">Guardar </button>
    <a style="display:inline" class="btn btn-info" href="{{route('Distrito.index')}}">Listado de Distritos</a>
    <a style="display:inline" class="btn btn-secondary" href="{{route('Ciudad.index')}}">Volver</a>
</form>
@endsection
