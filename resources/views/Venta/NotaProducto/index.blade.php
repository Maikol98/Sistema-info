@extends('layout')

@section('contenido')
    <h1>Todas las Notas</h1>
    <hr>

    <table  width="60%" border="1">
        <thead>
            <th>Id_Producto</th>
            <th>Id_NotaVenta</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($nota as $datos)
                <tr>
                    <td>{{$datos->Id_Producto}}</td>
                    <td>{{$datos->Id_NotaVenta}}</td>
                    <td>{{$datos->Cantidad}}</td>
                    <td>{{$datos->PrecioUnitario}}</td>
                     <td><a href="{{route('DetalleVenta.edit',$datos->Id_Producto)}}"></a>
                        <form style="display:inline"
                            action="{{route('DetalleVenta.destroy', $datos->Id_Producto)}}"method="post">
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
