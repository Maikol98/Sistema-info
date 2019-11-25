@extends('layout')
@section('contenido')


<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">REGISTRAR CIUDAD</a>
    </nav>
<p></p>


<form action="{{route('Ciudad.store')}}" method="post">

    {!!csrf_field()!!}
    <div class="container">
            <div class="form-group">
                    <label for="">Nombre Ciudad</label>
                    <input type="text" name="Nombre" class="form-control">
            </div>

        <button type="submit" class="btn btn-primary">Guardar </button>
        <a style="display:inline" class="btn btn-secondary" href="{{route('Ciudad.index')}}">Volver</a>
    </div>
</form>

<p></p>
<hr>
@endsection

