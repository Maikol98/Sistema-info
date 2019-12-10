@extends('layout')
@section('contenido')


<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">EDITAR CIUDAD</a>
    </nav>
<p></p>

<form action="{{route('Ciudad.update',$ciudad->Id)}}" method="post">

    {!!method_field('PUT')!!}

    {!!csrf_field()!!}
    <div class="container">
        <div class="col-md-5 mb-2">
            <label class="text-white" for="">Nombre Ciudad</label>
            <input type="text" name="Nombre" value="{{$ciudad->Nombre}}" class="form-control">
            <p></p>
            <button type="submit" class="btn btn-primary">Guardar </button>
            <a style="display:inline" class="btn btn-secondary" href="{{route('Ciudad.index')}}">Volver</a>
        </div>
        </div>
</form>

@endsection
