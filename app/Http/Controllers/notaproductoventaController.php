<?php

namespace App\Http\Controllers;

use App\Notaproductoventa;
use App\Notaventa;
use App\Producto;
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
        //OBTENEMOS DATOS DEL PRODUCTO
        $IdProducto=DB::table('producto')
        ->select('Id')
        ->where('Cod_Producto','=',$request->input('CodProducto'))
        ->pluck('Id');

        $datos=Producto::findOrFail($IdProducto[0]);

        $nota=new Notaproductoventa();
        $nota->Id_Producto=$IdProducto[0];
        $nota->Id_NotaVenta=$request->input('IdVenta');
        $nota->Cantidad=$request->input('Cantidad');
        //CALCULAMOS EL PRECIO
        $nota->PrecioUnitario=($nota->Cantidad)*($datos->Precio);
        //PRECIOTOTAL
        $venta=Notaventa::findOrFail($nota->Id_NotaVenta);
        $Total=($venta->PrecioTotal)+($nota->PrecioUnitario);

        $dato=$nota->Id_NotaVenta;

        $nota->save();

        //ACTUALIZAMOS EL PRECIOTOTAL
        DB::table('notaventa')->where('Id',$venta->Id)
        ->update(['PrecioTotal'=>$Total]);

        return view('Venta/NotaProducto/crearNota', compact('dato'));
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
