@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">TODOS LOS CHOFERES</a>
    </nav>
<p></p>
    <p><a class="btn btn-success" href="{{route('Chofer.create')}}">Añadir Chofer</a></p>
    <table class="table">
        <thead class="thead-dark">
            <th>Carnet</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($chofer as $datos)
                <tr>
                <td class="text-white">{{$datos->Ci_Chofer}}</td>
                <td class="text-white">{{$datos->Nombre}}</td>
                <td class="text-white">{{$datos->Telefono}}</td>
                <td class="text-white">{{$datos->Direccion}}</td>
                <td><a class="btn btn-primary btn-sm" href="{{route('Chofer.edit',$datos->Id)}}">Editar</a>
                    <form style="display:inline" action="{{route('Chofer.destroy', $datos->Id)}}" method="post">
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
