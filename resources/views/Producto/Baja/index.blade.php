@extends('layout')

@section('contenido')
    <nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">TODOS LAS BAJAS</a>
    </nav>
    <p></p>
    <p><a class="btn btn-success" href="{{route('Baja.create')}}">Añadir Baja</a></p>

        <table whidth='100%' border="2">
                <thead>
                    <th>Fecha</th>
                    <th>Descripcion</th>
                    <th>Tipo de Baja</th>
                    <th>Nombre Producto</th>
                    <th>Marca</th>
                    <th>Accion</th>
                </thead>
        <tbody>
                @foreach ($baja as $datos)
                <tr>
                    <td>{{$datos->Fecha}}</td>
                    <td>{{$datos->Descripcion}}</td>
                    <td>{{$datos->TipoBaja}}</td>
                    <td>{{$datos->Nombre}}</td>
                    <td>{{$datos->Marca}}</td>
                    <td><form action="{{route('Baja.destroy', $datos->Id)}}" method="post">
                            {!!method_field('DELETE')!!}
                            {!!csrf_field()!!}
                            <button type="submit"class="btn btn-danger btn-sm" >Elimnar</button>
                        </form>
                    </td>
                </tr>
                @endforeach

        </tbody>
    </table>
@endsection
