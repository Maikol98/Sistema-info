@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
    <a href="" class="navbar-brand">REGISTRAR CATEGORIA</a>
</nav>
<form action="{{route('Categoria.store')}}" method="POST">
    {!! csrf_field() !!}
    <div class="container">
        <div class="form-row">
            <div class="col-md-6 mb-2">
                <label class="text-white" for="">Cod_Categoria</label>
                <input type="text" name="codigo" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-2">
                <label class="text-white" for="">Nombre</label>
                <input type="text" name="Nombre" class="form-control">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar </button>
        <a style="display:inline" class="btn btn-secondary" href="{{route('Categoria.index')}}">Volver</a>
    </div>
</form>
@endsection
