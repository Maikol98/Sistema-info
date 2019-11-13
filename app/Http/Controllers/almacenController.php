<?php

namespace App\Http\Controllers;

use App\Almacen;
use Illuminate\Http\Request;

class almacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $almacen=DB::table('almacen')
        ->select('Id','Cod_Almacen','Dimension','Capacidad','Direccion')
        ->where('Estado','=','1')
        ->get();
        return view('Almacen/almacen/index',compact('almacen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Almacen/Almacen/almacen');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $almacen=new Almacen();
        $almacen->Cod_Almacen=$request->input('Codigo');
        $almacen->Dimension=$request->input('Dimension');
        $almacen->Capacidad=$request->input('Capacidad');
        $almacen->Direccion=$request->input('Direccion');
        $almacen->Estado=1;
        $almacen->save();
        return redirect()->route('Almacen.index');
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
        $almacen=Almacen::findOrFail($id);

        return view('Almacen/Almacen/edit',compact('almacen'));
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
        $almacen=Almacen::findOrFail($id);
        $almacen->Dimension=$request->input('Dimension');
        $almacen->Capacidad=$request->input('Capacidad');

        $almacen->update();
        return redirect()->route('Almacen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $almacen=Almacen::findOrFail($id);
        $almacen->Estado=0;
        $almacen->update();

        return redirect()->route('Almacen.index');
    }
}
