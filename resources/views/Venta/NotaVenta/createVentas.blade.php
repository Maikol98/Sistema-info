@extends('layout')

@section('contenido')

<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">REGISTRAR VENTAS</a>
</nav>
    <form action="{{route('Notaventa.store')}}" method="POST">

            {!! csrf_field() !!}
            <div class="container">
                    <div class="form-group">
                            <label for="">Ci Cliente</label>
                            <input type="text" name="CiCliente" class="form-control">
                    </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar </button>
            <a style="display:inline" class="btn btn-secondary" href="{{route('Notaventa.index')}}">Volver</a>
    </form>
    <br>
@endsection
