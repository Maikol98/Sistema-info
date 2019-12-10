@extends('layout')


@section('contenido')
<nav class="navbar navbar-dark bg-primary">
                <a href="" class="navbar-brand">EDITAR ALMACEN</a>
            </nav>
    <form action="{{route('Almacen.update',$almacen->Id)}}" method="POST">

        {!!method_field('PUT')!!}

        {!! csrf_field() !!}

        <div class="container">
                <div class="col-md-6 mb-2">
                        <label class="text-white" for="">Dimension</label>
                        <input type="text" name="Dimension" value="{{$almacen->Dimension}}" class="form-control">
                </div>
                <div class="col-md-6 mb-2">
                         <label class="text-white" for="">Capacidad</label>
                         <input type="text" name="Capacidad" value="{{$almacen->Capacidad}}" class="form-control">
                         <p></p>
                         <button type="submit" class="btn btn-primary">Guardar </button>
        <a style="display:inline" class="btn btn-secondary" href="{{route('Almacen.index')}}">Atras</a>
                </div>
        </div>

    </form>
    <br>
@endsection
