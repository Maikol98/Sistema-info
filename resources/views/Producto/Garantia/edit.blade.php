@extends('layout')


@section('contenido')
<nav class="navbar navbar-dark bg-primary">
                <a href="" class="navbar-brand">REGISTRAR ALMACEN</a>
</nav>
    <form action="{{route('Garantia.update',$garantia->Id)}}" method="POST">

        {!!method_field('PUT')!!}

        {!! csrf_field() !!}

        <div class="container">
                <div class="form-group">
                        <label for="">Duracion</label>
                        <input type="text" name="duracion" value="{{$garantia->Duracion}}" class="form-control">
                </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar </button>
    </form>
    <br>
@endsection
