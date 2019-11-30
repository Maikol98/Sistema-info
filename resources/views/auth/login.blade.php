@extends('layout')

@section('contenido')
<p></p>
<p></p>
<div class="container">
<nav class="navbar navbar-dark bg-primary">
    <a href="" class="navbar-brand">LOGIN</a>
</nav>

<form action="/login" method="post">

    {!!csrf_field()!!}
    <div class="container">
            <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="alguien@gmail.com" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Password" class="form-control">
            </div>

        <button type="submit" class="btn btn-primary">Ingresar </button>
        <a style="display:inline" class="btn btn-secondary" href="/">Volver</a>
    </div>
</form>

</div>

@endsection
