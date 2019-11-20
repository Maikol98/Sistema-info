<?php

namespace App\Http\Controllers;

use App\Estante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class estanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estante=DB::table('Estante')
        ->select('Id','Capacidad','Descripcion','Id_Almacen','Id_Categoria')
        ->where('Estado','=','1')
        ->get();

        return view('Almacen/Estante/index',compact('estante'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Almacen/Estante/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estante=new Estante();
        $estante->Capacidad=$request->input('capacidad');
        $estante->Descripcion=$request->input('descripcion');
        $estante->Estado=1;
        $estante->Id_Almacen=$request->input('idAlma');
        $estante->Id_Categoria=$request->input('idCate');

        $estante->save();

        return redirect()->route('Estante.index');
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
        $estante=Estante::findOrFail($id);

        return view('Almacen/Estante/edit', compact('estante'));
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
        $estante=Estante::findOrFail($id);
        $estante->Capacidad=$request->input('capacidad');
        $estante->Descripcion=$request->input('descripcion');
        $estante->Id_Almacen=$request->input('idAlma');
        $estante->Id_Categoria=$request->input('idCate');

        $estante->update();

        return redirect()->route('Estante.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estante=Estante::findOrFail($id);
        $estante->Estado=0;

        $estante->update();

        return redirect()->route('Estante.index');
    }
}
