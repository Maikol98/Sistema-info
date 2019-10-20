@extends('layout')

@section('contenido')
    <h1>Login</h1>
    <form method="POST" action="/login">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Entrar">
    </form>

@endsection
