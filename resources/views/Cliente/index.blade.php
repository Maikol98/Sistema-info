@extends('layout')

@section('contenido')

<style type="text/css">
    .boton_personalizado{
      text-decoration: none;
      padding: 10px;
      font-weight: 80;
      font-size: 5px;
      color: #ffffff;
      background-color: #1883ba;
      border-radius: 6px;
      border: 2px solid #0016b0;
    }
  </style>
    <h1>Todos los Clientes</h1>
    <table width="100%" border="1">
        <thead>
            <th>Carnet</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($cliente as $datosCliente)
                <tr>
                <td>{{$datosCliente->Ci_Cliente}}</td>
                <td>{{$datosCliente->Nombre}}</td>
                <td>{{$datosCliente->Direccion}}</td>
                <td>{{$datosCliente->Telefono}}</td>
                <td>{{$datosCliente->Correo}}</td>
                <td><a  href="{{route('Cliente.edit',$datosCliente->Id)}}">Editar</a>
                    <form style="display:inline" action="{{route('Cliente.destroy', $datosCliente->Id)}}" method="post">
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
