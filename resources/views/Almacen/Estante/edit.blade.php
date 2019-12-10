@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
    <a href="" class="navbar-brand">EDITAR ESTANTE</a>
</nav>


<form action="{{route('Estante.update',$estante->Id)}}" method="POST">
    {!!method_field('PUT')!!}

    {!! csrf_field() !!}
    <div class="container">
        <div class="form-row">
            <div class="col-md-6 mb-2">
                <label class="text-white" for="">Descripcion</label>
                <input type="text" name="descripcion" value="{{$estante->Descripcion}}" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-2 mb-2">
                <label class="text-white" for="">Capacidad</label>
                <input type="text" name="capacidad" value="{{$estante->Capacidad}}" class="form-control">
            </div>
            <div class="col-md-2 mb-2">
                <label class="text-white" for="">Id Almacen</label>
                <input type="text" name="idAlma" value="{{$estante->Id_Almacen}}" class="form-control">
            </div>
            <div class="col-md-2 mb-2">
                <label class="text-white" for="">Id Categoria</label>
                <input type="text" name="idCate" value="{{$estante->Id_Categoria}}" class="form-control">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar </button>
        <a style="display:inline" class="btn btn-secondary" href="{{route('Almacen.show',$estante->Id_Almacen)}}">Atras</a>
    </div>
</form>
@endsection
