<?php

namespace App\Http\Controllers;

use App\Notacompra;
use App\Notaproductocompra;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class notaproductocompraController extends Controller
{
    function __construct()
    {
        $this->middleware(['auth','roles:Admin']);
    }


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
        ->where('Cod_producto','=',$request->input('Codigo'))
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
        ->select(DB::raw('AVG(notaproductocompra.Precio) as Promedio'))->from('notaproductocompra')
        ->where('Id_Producto','=',$producto->Id)->first();
        //dd($preciopromedio);
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
        ->where('Id_Producto','=',$Id)->where('Id_Compra','=',$IdCompra)
        ->first();
        return view('Compra/Compra/editDetalle', compact('detallecompra'));
    }




    //ACTUALLIZA LOS DATOS
    public function actualizar(Request $request,$id,$idCompra)
    {
        $Cantidad=$request->input('cantidad');
        $PrecioUn=($Cantidad)*($request->input('Precio'));

        $laststock=DB::table('notaproductocompra')->select('Cantidad')
        ->where('Id_Producto','=',$id)->where('Id_Compra','=',$idCompra)
        ->first();

        // ACTUALIZAMOS DATOS DEL DETALLE
        DB::table('notaproductocompra')
        ->where('Id_Producto','=',$id)->where('Id_Compra','=',$idCompra)
        ->update(['Cantidad'=>$Cantidad,'Precio'=>$request->input('Precio'),'PrecioUnitario'=>$PrecioUn]);
        //ACTUALIZAMOS DATOS DE LA COMPRA
        $nota=DB::table('notaproductocompra')->select(DB::raw('SUM(PrecioUnitario) as PrecioTot'))
        ->where('notaproductocompra.Id_Compra','=',$idCompra)->first();

        DB::table('notacompra')->where('notacompra.id','=',$idCompra)
        ->update(['PrecioTotal'=>$nota->PrecioTot]);

        //ACTUALIZAMOS EL STOCK DEL PRODUCTO
        $stock=DB::table('producto')->select('Stock')->where('Id','=',$id)
        ->first();
        $stock->Stock=($stock->Stock)+$Cantidad-($laststock->Cantidad);

        //ACTUALIZAMOS EL PROMEDIO Y STOCK DEL PRODUCTO
        $preciopromedio=DB::table('notaproductocompra')
        ->select(DB::raw('AVG(notaproductocompra.Precio) as Promedio'))
        ->where('Id_Producto','=',$id)->first();

        DB::table('producto')->where('Id',$id)
        ->update(['Stock'=>$stock->Stock,'PrecioPromedio'=>$preciopromedio->Promedio]);

        return redirect()->route('NotaCompra.show',$idCompra);
    }




    public function eliminar($Id,$IdCompra)
    {
        //OBTENEMOS EL PRECIO UNITARIO
        $detallecompra=DB::table('notaproductocompra')
        ->select('Id_Producto','Id_Compra','Cantidad','PrecioUnitario')
        ->where('Id_Producto','=',$Id)->where('Id_Compra','=',$IdCompra)
        ->first();
        //ACTUALIZAMOS EL STOCK DEL PRODUCTO
        $stock=DB::table('producto')->select('Stock')->where('Id','=',$Id)
        ->first();
        $stock->Stock=($stock->Stock)-($detallecompra->Cantidad);

        $lastPrecioUni=$detallecompra->PrecioUnitario;
        //ELIMINAMOS EL DETALLE
        $detallecompra=DB::table('notaproductocompra')
        ->where('Id_Producto','=',$Id)->where('Id_Compra','=',$IdCompra)
        ->delete();
        //ACTUALIZAMOS EL PRECIOTOTAL
        $notacompra=Notacompra::findOrFail($IdCompra);
        $precioTot=($notacompra->PrecioTotal)-$lastPrecioUni;

        DB::table('notacompra')->where('id',$notacompra->id)
        ->update(['PrecioTotal'=>$precioTot]);
        //ACTUALIZAMOS PRECIO PROMEDIO
        $preciopromedio=DB::table('notaproductocompra')
        ->select(DB::raw('AVG(notaproductocompra.Precio) as Promedio'))
        ->where('Id_Producto','=',$Id)->first();

        DB::table('producto')->where('Id',$Id)
        ->update(['Stock'=>$stock->Stock,'PrecioPromedio'=>$preciopromedio->Promedio]);

        return redirect()->route('NotaCompra.show',$IdCompra);
    }

}
