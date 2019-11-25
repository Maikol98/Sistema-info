<?php

namespace App\Http\Controllers;

use App\Baja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bajaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baja=DB::table('baja')
        ->join('producto','producto.Id','=','baja.id')
        ->select('baja.Id as Id','Fecha','Descripcion','TipoBaja','Nombre','Marca')
        ->get();
        return view('Producto/Baja/index', compact('baja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Producto/Baja/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto=DB::table('producto')
        ->select('Id')->where('Cod_Producto','=',$request->input('Id'))
        ->pluck('Id');

        $baja=new Baja();
        $baja->Fecha=date('Y-m-d H:i:s');
        $baja->Descripcion=$request->input('Descripcion');
        $baja->TipoBaja=$request->input('Tipo');
        $baja->Id_Producto=$producto[0];

        $baja->save();

        return redirect()->route('Baja.index');
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
        Baja::findOrFail($id)->delete();

        return redirect()->route('Baja.index');
    }
}
