<?php

namespace App\Http\Controllers;

use App\Notaproductoventa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class notaproductoventaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nota=DB::table('Notaproductoventa')
        ->select('Id_Producto','Id_NotaVenta','Cantidad','PrecioUnitario')
        ->get();
        return view('Venta/NotaProducto/index',compact('nota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Venta/NotaProducto/crearNota');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nota=new Notaproductoventa();
        $nota->Id_Producto=$request->input('CodProducto');
        $nota->Id_NotaVenta=$request->input('IdVenta');
        $nota->Cantidad=$request->input('Cantidad');
        $nota->PrecioUnitario=$request->input('Preciounitario');
        $nota->save();
        return redirect()->route('DetalleVenta.index');
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
        $nota=Notaproductoventa::findOrFail($id);
        return view('Venta/NotaProducto/edit',compact('nota'));
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
        $nota=Notaproductoventa::findOrFail($id);
        $nota->Capacidad=$request->input('Capacidad');
        $nota->PrecioUnitario=$request->input('Preciounitario');

        $nota->update();

        return redirect()->route('DetalleVenta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Notaproductoventa::findOrFail($id)->delete();
        return redirect()->route('DetalleVenta.index');
    }
}
