@extends('layout')

@section('contenido')
    <nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">REGISTRAR BAJA</a>
    </nav>

    <form action="{{route('Baja.store')}}" method="post">
        {!! csrf_field() !!}
        <div class="container">
                <div class="form-group">
                        <label class="text-white" for="">Descripcion</label>
                        <input type="text" name="Descripcion" class="form-control">
                </div>
                <div class="form-group">
                        <label class="text-white" for="">Tipo de Baja</label>
                        <input type="text" name="Tipo" class="form-control">
                </div>
                <div class="form-group">
                         <label class="text-white" for="">Id Producto</label>
                         <input type="text" name="Id" class="form-control">
                </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar </button>
        <a style="display:inline" class="btn btn-secondary" href="{{route('Baja.index')}}">Volver</a>
    </form>
    <br>
@endsection

