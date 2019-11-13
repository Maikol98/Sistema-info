@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">TODOS LAS CATEGORIAS</a>
    </nav>
    <p></p>
        <table whidth='60%' border="1">
                <thead>
                    <th>Cod Categoria</th>
                    <th> Nombre</th>
                    <th>Acciones</th>
                </thead>
        <tbody>
                @foreach ($categoria as $datos)
                <tr>
                    <td>{{$datos->Cod_Categoria}}</td>
                    <td>{{$datos->Nombre}}</td>
                    <td><a  href="{{route('Categoria.edit',$datos->Id)}}">Editar</a>
                        <form style="display:inline" action="{{route('Categoria.destroy', $datos->Id)}}" method="post">
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
