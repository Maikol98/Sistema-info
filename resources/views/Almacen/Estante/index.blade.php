@extends('layout')

@section('contenido')
<nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">TODOS LOS ESTANTES</a>
    </nav>
    <p></p>
        <p><a class="btn btn-success" href="{{route('Estante.create')}}">Añadir Estante a Almacen</a>
        <a style="display:inline" class="btn btn-secondary" href="{{route('Almacen.index')}}">Atras</a>
        </p>
        <div class="text-center">
        <table class="table">
                <thead class="thead-dark">
                    <th>Capacidad</th>
                    <th>Descripcion</th>
                    <th>Codigo Almacen</th>
                    <th>Categoria</th>
                    <th>Acciones</th>
                </thead>
        <tbody>
                @foreach ($estante as $datos)
                <tr>
                    <td class="text-white">{{$datos->Capacidad}}</td>
                    <td class="text-white">{{$datos->Descripcion}}</td>
                    <td class="text-white">{{$datos->Id_Almacen}}</td>
                    <td class="text-white">{{$datos->Nombre}}</td>
                    <td><a class="btn btn-primary" href="{{route('Estante.edit',$datos->idEstante)}}">Editar</a>
                        <form style="display:inline" action="{{route('Estante.destroy', $datos->idEstante)}}" method="post">
                            {!!csrf_field()!!}
                            {!!method_field('DELETE')!!}
                            <button type="submit" class="btn btn-danger">Elimnar</button>
                        </form>
                    </td>
                </tr>
                @endforeach

        </tbody>
    </table>
</div>
@endsection
