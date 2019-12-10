@extends('layout')


@section('contenido')
<nav class="navbar navbar-dark bg-primary">
                <a href="" class="navbar-brand">REGISTRAR GARANTIA</a>
</nav>
    <form action="{{route('Garantia.store')}}" method="POST">

        {!! csrf_field() !!}
        <div class="container">
                <div class="col-md-6 mb-2">
                        <label class="text-white" for="">Cod_Garantia</label>
                        <input type="text" name="codigo" class="form-control">
                </div>
                <div class="col-md-6 mb-2">
                        <label class="text-white" for="">Duracion (meses)</label>
                        <input type="text" name="duracion" class="form-control">
                        <p></p>
                        <button type="submit" class="btn btn-primary">Guardar </button>
                <a style="display:inline" class="btn btn-secondary" href="{{route('Garantia.index')}}">Volver</a>
                </div>

        </div>

    </form>
    <br>
@endsection
