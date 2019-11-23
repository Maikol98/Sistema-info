@extends('layout')

@section('contenido')

    <h1>Todas las notas</h1>

    <table width="50%" border="1">
        <thead>
            <th>PrecioTotal</th>
            <th>FechaVenta</th>
            <th>Id Cliente</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($notaventa as $datos)
                <tr>
                <td>{{$datos->PrecioTotal}}</td>
                <td>{{$datos->FechaVenta}}</td>
                <td>{{$datos->Id_Cliente}}</td>
                <td><form style="display:inline" action="{{route('Notaventa.destroy', $datos->Id)}}" method="post">
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
