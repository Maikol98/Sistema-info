<?php

namespace App\Http\Controllers;

use App\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class vehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculo=DB::table('vehiculo')
        ->select('Placa','Modelo','Color','Capacidad')
        ->where('Estado','=','1')->get();

        return view('Pedido/Vehiculo/index', compact('vehiculo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pedido/Vehiculo/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehiculo=new Vehiculo();
        $vehiculo->Placa=$request->input('placa');
        $vehiculo->Modelo=$request->input('modelo');
        $vehiculo->Color=$request->input('color');
        $vehiculo->Capacidad=$request->input('capacidad');
        $vehiculo->Estado=1;

        $vehiculo->save();

        return redirect()->route('Vehiculo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehiculo=Vehiculo::findOrFail($id);
        return view('Pedido/Vehiculo/edit', compact('vehiculo'));
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
        $vehiculo=Vehiculo::findOrFail($id);
        $vehiculo->Modelo=$request->input('modelo');
        $vehiculo->Color=$request->input('color');
        $vehiculo->Capacidad=$request->input('capacidad');

        $vehiculo->update();

        return redirect()->route('Vehiculo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehiculo=Vehiculo::findOrFail($id);
        $vehiculo->Estado=0;
        $vehiculo->update();

        return redirect()->route('Vehiculo.index');
    }
}
