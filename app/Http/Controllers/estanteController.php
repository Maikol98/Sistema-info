<?php

namespace App\Http\Controllers;

use App\Estante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class estanteController extends Controller
{

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

        $id=$request->input('idAlma');

        return redirect()->route('Almacen.show',$id);
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

        $id=$estante->Id_Almacen;

        $estante->update();

        return redirect()->route('Almacen.show',$id);
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

        $id=$estante->Id_Almacen;

        $estante->update();

        return redirect()->route('Almacen.show',$id);
    }
}
