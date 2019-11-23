@extends('layout')

@section('contenido')
    <nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">REGISTRAR BAJA</a>
    </nav>

    <form action="{{route('Baja.store')}}" method="post">
        {!! csrf_field() !!}
        <div class="container">
                <div class="form-group">
                        <label for="">Descripcion</label>
                        <input type="text" name="Descripcion" class="form-control">
                </div>
                <div class="form-group">
                        <label for="">Tipo de Baja</label>
                        <input type="text" name="Tipo" class="form-control">
                </div>
                <div class="form-group">
                         <label for="">Id Producto</label>
                         <input type="text" name="Id" class="form-control">
                </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar </button>
    </form>
    <br>
@endsection
