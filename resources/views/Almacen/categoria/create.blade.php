@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
    <a href="" class="navbar-brand">REGISTRAR CATEGORIA</a>
</nav>
<form action="{{route('Categoria.store')}}" method="POST">

{!! csrf_field() !!}
<div class="container">
    <div class="form-group">
            <label for="">Cod_Categoria</label>
            <input type="text" name="codigo" class="form-control">
    </div>
    <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="Nombre" class="form-control">
    </div>
</div>
<button type="submit" class="btn btn-primary">Guardar </button>
</form>
<br>
@endsection
