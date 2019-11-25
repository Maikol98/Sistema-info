@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">TODOS LAS CIUDADES</a>
    </nav>
    <p></p>
    <p><a class="btn btn-success" href="{{route('Ciudad.create')}}">Añadir Ciudad</a></p>
    <table width="50%" border="1">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Añadir</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($ciudad as $datosCiudad)
                <tr>
                <td>{{$datosCiudad->Id}}</td>
                <td>{{$datosCiudad->Nombre}}</td>
                <td><a class="btn btn-success btn-sm" href="{{route('Ciudad.show',$datosCiudad->Id)}}">Añadir Distrito</a></td>
                <td><a class="btn btn-primary btn-sm" href="{{route('Ciudad.edit',$datosCiudad->Id)}}">Editar</a>
                    <a style="display:inline" class="btn btn-success btn-sm" href="{{route('Distrito.show',$datosCiudad->Id)}}">Distrito</a>
                    <form style="display:inline" action="{{route('Ciudad.destroy', $datosCiudad->Id)}}" method="post">
                        {!!csrf_field()!!}
                        {!!method_field('DELETE')!!}
                        <button type="submit" class="btn btn-danger btn-sm">Elimnar</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
