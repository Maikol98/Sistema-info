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
            <div class="col-md-6 mb-2">
                <b><label class="text-white" for="">Email</label></b>
                    <input type="email" name="email" placeholder="alguien@gmail.com" class="form-control">
            </div>

            <div class="col-md-6 mb-2">
               <b><label class="text-white" for="">Password</label></b>
                <input type="password" name="password" placeholder="Password" class="form-control">
                <p></p>
                <button type="submit" class="btn btn-primary">Ingresar </button>
               <a style="display:inline" class="btn btn-secondary" href="/">Volver</a>
            </div>
    </div>
</form>

</div>

@endsection
