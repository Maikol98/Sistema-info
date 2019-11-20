<?php

namespace App\Http\Controllers;

use App\Notacompra;
use App\Notaproductocompra;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class notaproductocompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Compra/Compra/DetalleCompra');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detallecompra=new Notaproductocompra();
        $detallecompra->Id_Producto=$request->input('Codigo');
        $detallecompra->Id_Compra=$request->input('nota');
        $detallecompra->Cantidad=$request->input('cantidad');
        //SACAMOS EL PRECIO DE CADA PRODUCTO
        $producto=Producto::findOrFail($detallecompra->Id_Producto);
        //ACTUALIMANOS EL PRECIO
        $detallecompra->PrecioUnitario=($producto->Precio)*($detallecompra->Cantidad);
        //SACAMOS CALCULO DEL PRECIO TOTAL 
        $notacompra=Notacompra::findOrFail($detallecompra->Id_Compra);
        $precioTot=($notacompra->PrecioTotal)+($detallecompra->PrecioUnitario);
        //REGISTRAMOS EL DETALLE DE LA COMPRA
        $detallecompra->save();

        //ACTUALIZAMOS EL VALOR DEL ATRIBUTO PRECIO TOTAL
        DB::table('notacompra')->where('id',$notacompra->id)
        ->update(['PrecioTotal'=>$precioTot]);

        return redirect()->route('DetalleCompra.create');
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
        $detallecompra=Notaproductocompra::findOrFail($id);
        $notacompra=Notacompra::findOrFail($id);
        $notacompra->PrecioTotal=$notacompra->PrecioTotal-(($detallecompra->Cantidad)*($detallecompra->PrecioUnitario));
    }
}
