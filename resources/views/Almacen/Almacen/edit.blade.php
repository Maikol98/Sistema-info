@extends('layout')


@section('contenido')
<nav class="navbar navbar-dark bg-primary">
                <a href="" class="navbar-brand">EDITAR ALMACEN</a>
            </nav>
    <form action="{{route('Almacen.update',$almacen->Id)}}" method="POST">

        {!!method_field('PUT')!!}

        {!! csrf_field() !!}

        <div class="container">
                <div class="form-group">
                        <label for="">Dimension</label>
                        <input type="text" name="Dimension" value="{{$almcen->Dimension}}" class="form-control">
                </div>
                <div class="form-group">
                         <label for="">Capacidad</label>
                         <input type="text" name="Capacidad" value="{{$almcen->Capacidad}}" class="form-control">
                </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar </button>
    </form>
    <br>
@endsection
