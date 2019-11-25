@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">TODOS LAS CATEGORIAS</a>
    </nav>
    <p></p>
    <p><a class="btn btn-success" href="{{route('Categoria.create')}}">Añadir Categoria</a></p>
        <table whidth='60%' border="2">
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
                    <td><a class="btn btn-primary btn-sm" href="{{route('Categoria.edit',$datos->Id)}}">Editar</a>
                        <form style="display:inline" action="{{route('Categoria.destroy', $datos->Id)}}" method="post">
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
