@extends('layout')


@section('contenido')
<nav class="navbar navbar-dark bg-primary">
                <a href="" class="navbar-brand">REGISTRAR GARANTIA</a>
</nav>
    <form action="{{route('Garantia.store')}}" method="POST">

        {!! csrf_field() !!}
        <div class="container">
                <div class="form-group">
                        <label for="">Cod_Garantia</label>
                        <input type="text" name="codigo" class="form-control">
                </div>
                <div class="form-group">
                        <label for="">Duracion (meses)</label>
                        <input type="text" name="duracion" class="form-control">
                </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar </button>
        <a style="display:inline" class="btn btn-secondary" href="{{route('Garantia.index')}}">Volver</a>
    </form>
    <br>
@endsection
