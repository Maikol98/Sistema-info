@extends('layout')


@section('contenido')
<nav class="navbar navbar-dark bg-primary">
                <a href="" class="navbar-brand">REGISTRAR ALMACEN</a>
</nav>
    <form action="{{route('Garantia.update',$garantia->Id)}}" method="POST">

        {!!method_field('PUT')!!}

        {!! csrf_field() !!}

        <div class="container">
                <div  class="col-md-6 mb-2">
                        <label class="text-white" for="">Duracion</label>
                        <input type="text" name="duracion" value="{{$garantia->Duracion}}" class="form-control">
                        <p></p>
                        <button type="submit" class="btn btn-primary">Guardar </button>
        <a style="display:inline" class="btn btn-info" href="{{route('Garantia.index')}}">Volver</a>
                </div>
        </div>
    </form>
    <br>
@endsection
