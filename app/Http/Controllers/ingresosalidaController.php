<?php

namespace App\Http\Controllers;

use App\Ingresosalida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ingresosalidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingresosalida=Ingresosalida::all();
        return view('Almacen/Ingresosalida/index',compact('ingresosalida'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Almacen/Ingresosalida/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ingresosalida=new Ingresosalida();
        $ingresosalida->Fecha=date('Y-m-d H:i:s');
        $ingresosalida->Tipo=$request->input('tipo');
        $ingresosalida->Id_Estante=$request->input('Nroestante');
        $ingresosalida->save();

        return redirect()->route('Ingresosalida.index');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
