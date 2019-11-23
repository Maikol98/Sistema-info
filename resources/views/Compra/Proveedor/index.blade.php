@extends('layout')

@section('contenido')
    <nav class="navbar navbar-dark bg-primary">
        <a href="" class="navbar-brand">TODOS LOS PROVEEDORES</a>
    </nav>
    <p></p>
        <table whidth='100%' border="2">
                <thead>
                    <th>Cod Proveedor</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Tipo</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach ($proveedor as $datos)
                    <tr>
                     <td>{{$datos->Cod_Proveedor}}</td>
                     <td>{{$datos->Nombre}}</td>
                     <td>{{$datos->Direccion}}</td>
                     <td>{{$datos->Telefono}}</td>
                     <td>{{$datos->Email}}</td>ç
                     <td>{{$datos->Tipo}}</td>
                     <td><a  href="{{route('Proveedor.edit',$datos->Id)}}">Editar</a>
                     <form style="display:inline" action="{{route('Proveedor.destroy', $datos->Id)}}" method="post">
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
