@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">TODOS LOS ESTANTES</a>
    </nav>
    <p></p>
        <table whidth='100%' border="1">
                <thead>
                    <th>Capacidad</th>
                    <th>Descripcion</th>
                    <th>Id Alma</th>
                    <th>Id categoria</th>
                    <th>Acciones</th>
                </thead>
        <tbody>
                @foreach ($estante as $datos)
                <tr>
                    <td>{{$datos->Capacidad}}</td>
                    <td>{{$datos->Descripcion}}</td>
                    <td>{{$datos->Id_Almacen}}</td>
                    <td>{{$datos->Id_Categoria}}</td>
                    <td><a  href="{{route('Estante.edit',$datos->Id)}}">Editar</a>
                        <form style="display:inline" action="{{route('Estante.destroy', $datos->Id)}}" method="post">
                            {!!csrf_field()!!}
                            {!!method_field('DELETE')!!}
                            <button type="submit">Elimnar</button>
                        </form>
                    </td>
                </tr>
                @endforeach

        </tbody>
    </table>
@endsection
