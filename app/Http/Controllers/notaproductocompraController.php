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
        $dato=DB::table('producto')
        ->select('Id')
        ->where('Cod_Producto','=',$request->input('Codigo'))
        ->pluck('Id');


        $detallecompra=new Notaproductocompra();
        $detallecompra->Id_Producto=$dato[0];
        $detallecompra->Id_Compra=$request->input('nota');
        $detallecompra->Cantidad=$request->input('cantidad');
        $detallecompra->Precio=$request->input('Precio');
        $detallecompra->PrecioUnitario=($detallecompra->Precio)*($detallecompra->Cantidad);

        //SACAMOS CALCULO DEL PRECIO TOTAL
        $notacompra=Notacompra::findOrFail($detallecompra->Id_Compra);
        $precioTot=($notacompra->PrecioTotal)+($detallecompra->PrecioUnitario);

        //CALCULAMOS NUEVOS DATOS DEL PRODUCTO
        $producto=Producto::findOrFail($dato[0]);
        $stock=($producto->Stock)+($detallecompra->Cantidad);

        //REGISTRAMOS EL DETALLE DE LA COMPRA
        $detallecompra->save();

        //ACTUALIZAMOS EL STOCK DEL PRODUCTO
        $preciopromedio=DB::table('notaproductocompra')
        ->select(DB::raw('AVG(notaproductocompra.Precio) as Promedio'))
        ->where('Id_Producto','=',$producto->Id)->first();

        DB::table('producto')->where('Id',$producto->Id)
        ->update(['Stock'=>$stock,'PrecioPromedio'=>$preciopromedio->Promedio]);

        //ACTUALIZAMOS EL VALOR DEL ATRIBUTO PRECIO TOTAL
        DB::table('notacompra')->where('id',$notacompra->id)
        ->update(['PrecioTotal'=>$precioTot]);
        $dato=$notacompra->id;
        return view('Compra/Compra/DetalleCompra',compact('dato'));
    }





    //NOS MANDA A LA INTERFACE PARA EDITAR
    public function editar($Id,$IdCompra)
    {
        $detallecompra=DB::table('notaproductocompra')
        ->select('Id_Producto','Id_Compra','Cantidad','Precio','PrecioUnitario')
        ->where('Id_Producto','=',$Id,'and','Id_Compra','=',$IdCompra)
        ->first();
        return view('Compra/Compra/editDetalle', compact('detallecompra'));
    }








    //ACTUALLIZA LOS DATOS
    public function actualizar(Request $request,$id,$idCompra)
    {
        $Cantidad=$request->input('cantidad');
        //BUSCAMOS EL PRECIO DEL PRODUCTO
        $dato=Producto::findOrFail($id);
        $PrecioUn=($Cantidad)*($dato->Precio);

        //BUSCAMOS EL PRECIOUNITARIO Y MODIFICAMOS
        $detallecompra=DB::table('notaproductocompra')
        ->select('Id_Producto','Id_Compra','Cantidad','PrecioUnitario')
        ->where('Id_Producto','=',$id,'and','Id_Compra','=',$idCompra)
        ->first();

        $lastPrecioUni=$detallecompra->PrecioUnitario;

        $detallecompra=DB::table('notaproductocompra')
        ->where('Id_Producto','=',$id,'and','Id_Compra','=',$idCompra)
        ->update(['Cantidad'=>$Cantidad,'Precio'=>$request->input('Precio'),'PrecioUnitario'=>$PrecioUn]);

        $notacompra=Notacompra::findOrFail($idCompra);
        $precioTot=($notacompra->PrecioTotal)+$PrecioUn-$lastPrecioUni;

        DB::table('notacompra')->where('id',$notacompra->id)
        ->update(['PrecioTotal'=>$precioTot]);

        return redirect()->route('NotaCompra.show',$idCompra);
    }




    public function eliminar($Id,$IdCompra)
    {   //OBTENEMOS EL PRECIO UNITARIO
        $detallecompra=DB::table('notaproductocompra')
        ->select('Id_Producto','Id_Compra','Cantidad','PrecioUnitario')
        ->where('Id_Producto','=',$Id,'and','Id_Compra','=',$IdCompra)
        ->first();

        $lastPrecioUni=$detallecompra->PrecioUnitario;
        //ELIMINAMOS EL DETALLE
        $detallecompra=DB::table('notaproductocompra')
        ->where('Id_Producto','=',$Id,'and','Id_Compra','=',$IdCompra)
        ->delete();
        //ACTUALIZAMOS EL PRECIOTOTAL
        $notacompra=Notacompra::findOrFail($IdCompra);
        $precioTot=($notacompra->PrecioTotal)-$lastPrecioUni;

        DB::table('notacompra')->where('id',$notacompra->id)
        ->update(['PrecioTotal'=>$precioTot]);

        return redirect()->route('NotaCompra.show',$IdCompra);
    }

}
