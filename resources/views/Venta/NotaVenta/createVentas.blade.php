@extends('layout')

@section('contenido')

<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">REGISTRAR VENTAS</a>
</nav>
<p></p>
    <form action="{{route('Notaventa.store')}}" method="POST">

            {!! csrf_field() !!}
            <div class="container">
                    <div class="col-md-6 mb-2">
                            <label class="text-white"or="">Ci Cliente</label>
                            <input type="text" name="CiCliente" class="form-control">
                            <p></p>
                            <button type="submit" class="btn btn-primary">Guardar </button>
                            <a style="display:inline" class="btn btn-secondary" href="{{route('Notaventa.index')}}">Volver</a>
                    </div>
            </div>
    </form>
@endsection
