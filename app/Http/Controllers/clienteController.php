<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Distrito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = DB::table('cliente')
        ->select('Id','Ci_Cliente','Nombre', 'Direccion','Telefono','Correo')
        ->where('cliente.Estado','=','1')
        ->get();
        return view('Cliente/index',compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Cliente/Cliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //añadir distrito
        $distrito=DB::table('distrito')
        ->join('ciudad','ciudad.Id','=','distrito.Id_Ciudad')
        ->select('distrito.Id')
        ->where('distrito.Nro_Distrito','=',$request->input('id_Distrito'),
        'and','ciudad.Nombre','=',$request->input('Ciudad'))
        ->pluck('distrito.Id');


        //dd($distrito);

        $cliente=new Cliente();
        $cliente->Ci_Cliente=$request->input('CiCliente');
        $cliente->Nombre=$request->input('nombre');
        $cliente->Direccion=$request->input('direccion');
        $cliente->Telefono=$request->input('telefono');
        $cliente->Correo=$request->input('correo');
        $cliente->Estado=1;
        $cliente->Id_Distrito=$distrito[0];

        $cliente->save();

        return redirect()->route('Cliente.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente=DB::table('cliente')
        ->join('distrito','distrito.Id','=','cliente.Id_Distrito')
        ->join('ciudad','ciudad.Id','=','distrito.Id_Ciudad')
        ->select('distrito.Nro_Distrito','ciudad.Nombre as nombreCiudad','cliente.Id as IdCliente','Ci_Cliente',
                'cliente.Nombre','Direccion','Telefono','Correo')
        ->where('cliente.Id','=',$id)->first();
        return view('Cliente/edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //actualizar
        $distrito=DB::table('distrito')
        ->join('ciudad','ciudad.Id','=','distrito.Id_Ciudad')
        ->select('distrito.Id')
        ->where('distrito.Nro_Distrito','=',$request->input('id_Distrito'),
        'and','ciudad.Nombre','=',$request->input('Ciudad'))
        ->pluck('distrito.Id');

        $cliente=Cliente::findOrFail($id);
        $cliente->Nombre=$request->input('nombre');
        $cliente->Direccion=$request->input('direccion');
        $cliente->Telefono=$request->input('telefono');
        $cliente->Correo=$request->input('correo');
        $cliente->Id_Distrito=$distrito[0];
        $cliente->update();
        //redireccionar
        return redirect()->route('Cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //actualizar
        $cliente=Cliente::findOrFail($id);
        $cliente->Estado=0;
        $cliente->update();
        //redireccionar
        return redirect()->route('Cliente.index');
    }
}
