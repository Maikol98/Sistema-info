@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
    <a href="" class="navbar-brand">REGISTRAR ESTANTE</a>
</nav>
<form action="{{route('Estante.store')}}" method="POST">

{!! csrf_field() !!}
<div class="container">
    <div class="form-group">
            <label for="">Capacidad</label>
            <input type="text" name="capacidad" class="form-control">
    </div>

    <div class="form-group">
            <label for="">Descripcion</label>
            <input type="text" name="descripcion" class="form-control">
    </div>

    <div class="form-group">
            <label for="">Id Almacen</label>
            <input type="text" name="idAlma" class="form-control">
    </div>

    <div class="form-group">
            <label for="">Id Categoria</label>
            <input type="text" name="idCate" class="form-control">
    </div>
</div>
<button type="submit" class="btn btn-primary">Guardar </button>
<a style="display:inline" class="btn btn-danger" href="{{route('Almacen.index')}}">Cancelar</a>
</form>
<br>
@endsection
