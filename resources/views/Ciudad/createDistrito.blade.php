@extends('layout')
@section('contenido')

<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">REGISTRAR DISTRITO</a>
    </nav>
<p></p>

<form action="{{route('Distrito.store',$ciudad)}}" method="post">

    {!! csrf_field() !!}
    <div class="container">
            <div class="form-row">
             <div class="col-md-2 mb-2">
                    <label class="text-white" for="">Nro Distrito</label>
                    <input type="text" name="NroDistrito" class="form-control">
             </div>
             <div class="col-md-2 mb-2">
                    <label class="text-white" for="">Codigo Ciudad</label>
                    <input type="text" name="CodCiudad" value="{{$ciudad}}" class="form-control">
             </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-2">
                     <label class="text-white" for="">Nombre</label>
                     <input type="text" name="Nombre" class="form-control">
                </div>
            </div>
            <p></p>
            <button type="submit" class="btn btn-primary">Guardar </button>
            <a style="display:inline" class="btn btn-info" href="{{route('Distrito.index')}}">Listado de Distritos</a>
            <a style="display:inline" class="btn btn-secondary" href="{{route('Ciudad.index')}}">Volver</a>
    </div>
</form>
@endsection
