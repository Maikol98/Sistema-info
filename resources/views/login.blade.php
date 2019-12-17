@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
    <a href="" class="navbar-brand">REGISTRAR CLIENTE</a>
</nav>

<form action="{{route('user.store')}}" method="post">

        {!!csrf_field()!!}

    <div class="container">
        <div class="form-row">
            <div class="col-md-6 mb-2">
                <label class="text-white" for="">Nombre</label>
                <input style="display:inline" type="text" name="nombre" class="form-control">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-2">
                <label class="text-white" for="">Email</label>
                <input type="text" name="email" class="form-control">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-2">
                <label class="text-white" for="">Contraseña</label>
                <input type="password" name="contra" placeholder="Password" class="form-control">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-2">
                <label class="text-white" for="">Rol</label>
                <input type="text" name="rol" class="form-control">
            </div>
        </div>
        <p></p>
        <input type="submit" class="btn btn-primary btn-lg" value="Registrar">
    </div>
</form>
@endsection
