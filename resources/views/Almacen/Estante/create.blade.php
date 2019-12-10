@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
    <a href="" class="navbar-brand">REGISTRAR ESTANTE</a>
</nav>
<form action="{{route('Estante.store')}}" method="POST">

{!! csrf_field() !!}
<div class="container">
    <div class="form-row">
        <div class="col md-6 mb-2">
                <label class="text-white" for="">Capacidad</label>
                <input type="text" name="capacidad" class="form-control">
        </div>
    </div>
    <div class="form-row">
        <div class="col md-6 mb-2">
                <label class="text-white" for="">Descripcion</label>
                <input type="text" name="descripcion" class="form-control">
        </div>
    </div>
    <div class="form-row">
        <div class="col md-6 mb-2">
                <label  class="text-white" for="">Id Almacen</label>
                <input type="text" name="idAlma" class="form-control">
        </div>
            <div class="col md-6 mb-2">
                <label class="text-white" for="">Id Categoria</label>
                <input type="text" name="idCate" class="form-control">
        </div>
    </div>
    <p></p>
    <button type="submit" class="btn btn-primary">Guardar </button>
    <a style="display:inline" class="btn btn-danger" href="{{route('Almacen.index')}}">Cancelar</a>
</div>
</form>
<br>
@endsection
