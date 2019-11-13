<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto=DB::table('producto')
        ->select('Id','Cod_Producto','Nombre','Marca','Precio','PrecioPromedio','Stock')
        ->where('Estado','=','1')
        ->get();

        return view('Producto/Producto/index',compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Producto/Producto/createProducto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto=new Producto();
        $producto->Cod_producto=$request->input('Codigo');
        $producto->Nombre=$request->input('Nombre');
        $producto->Marca=$request->input('Marca');
        $producto->Precio=$request->input('Precio');
        $producto->PrecioPromedio=0;
        $producto->Stock=0;
        $producto->Estado=1;
        $producto->Id_Garantia=$request->input('IdGarantia');

        $producto->save();

        return redirect()->route('Producto.create');

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
        $producto=Producto::findOrFail($id);
        return view('Producto/Producto/edit', compact('producto'));
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
        $producto=Producto::findOrFail($id);
        $producto->Nombre=$request->input('Nombre');
        $producto->Marca=$request->input('Marca');
        $producto->Precio=$request->input('Precio');

        $producto->update();
        return redirect()->route('Producto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto=Producto::findOrFail($id);
        $producto->Estado=0;
        $producto->update();
        redirect()->route('Producto.index');
    }
}
