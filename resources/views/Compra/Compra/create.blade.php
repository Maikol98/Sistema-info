@extends('layout')


@section('contenido')
<nav class="navbar navbar-dark bg-primary">
                <a href="" class="navbar-brand">REGISTRAR COMPRA</a>
</nav>
    <form action="{{route('NotaCompra.store')}}" method="POST">

        {!! csrf_field() !!}
        <div class="container">
                <div class="form-group">
                        <label for="">Codigo Proveedor</label>
                        <input type="text" name="Codigo" class="form-control">
                </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar </button>
    </form>
    <br>
@endsection
