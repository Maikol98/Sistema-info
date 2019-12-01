<?php

namespace App\Http\Controllers;

use App\Detallepedido;
use App\Pedido;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class detallepedidoController extends Controller
{

    public function create($id)
    {
        $dato=$id;
        return view('Pedido/Pedido/createdetalle',compact('dato'));
    }


    public function store(Request $request)
    {
        $dato=DB::table('producto')
        ->select('Id','Precio','Stock')
        ->where('Cod_Producto','=',$request->input('Codigo'))
        ->first();


        $detallepedido=new Detallepedido();
        $detallepedido->Id_Producto=$dato->Id;
        $detallepedido->Id_Pedido=$request->input('pedido');
        $detallepedido->Descripcion=$request->input('descripcion');
        $detallepedido->Cantidad=$request->input('cantidad');
        $detallepedido->SubTotal=($dato->Precio)*($detallepedido->Cantidad);

        //SACAMOS CALCULO DEL PRECIO TOTAL
        $pedido=Pedido::findOrFail($detallepedido->Id_Pedido);
        $precioTot=($pedido->PrecioTotal)+($detallepedido->SubTotal);

        //CALCULAMOS NUEVOS DATOS DEL PRODUCTO
        $stock=($dato->Stock)-($detallepedido->Cantidad);

        //REGISTRAMOS EL DETALLE DE LA COMPRA
        $detallepedido->save();

        DB::table('producto')->where('Id',$dato->Id)
        ->update(['Stock'=>$stock]);

        //ACTUALIZAMOS EL VALOR DEL ATRIBUTO PRECIO TOTAL
        DB::table('pedido')->where('Id',$pedido->Id)
        ->update(['PrecioTotal'=>$precioTot]);

        $dato=$pedido->Id;

        return view('Pedido/Pedido/createdetalle', compact('dato'));
    }



    public function edit($Id_Pedido,$Id_Producto)
    {
        $detalle=DB::table('detallepedido')
        ->select('Cantidad','Descripcion','Id_Producto','Id_Pedido')
        ->where('Id_Pedido',$Id_Pedido)->where('Id_Producto',$Id_Producto)
        ->first();

        return view('Pedido/Pedido/editDetalle',compact('detalle'));
    }


    public function update(Request $request, $Id_Pedido,$Id_Producto)
    {
        $producto=Producto::findOrFail($Id_Producto);

        $Cantidad=$request->input('cantidad');
        $SubTotal=($producto->Precio)*$Cantidad;

        $laststock=DB::table('detallepedido')->select('Cantidad')
        ->where('Id_Producto',$Id_Producto)->where('Id_Pedido',$Id_Pedido)
        ->first();

        // ACTUALIZAMOS DATOS DEL DETALLE
        DB::table('detallepedido')
        ->where('Id_Producto','=',$Id_Producto)->where('Id_Pedido',$Id_Pedido)
        ->update(['Cantidad'=>$Cantidad,'SubTotal'=>$SubTotal,'Descripcion'=>$request->input('descripcion')]);

        //ACTUALIZAMOS DATOS DE LA VENTA
        $pedido=DB::table('detallepedido')->select(DB::raw('SUM(SubTotal) as PrecioTot'))
        ->where('Id_Pedido','=',$Id_Pedido)->first();

        DB::table('pedido')->where('pedido.Id',$Id_Pedido)
        ->update(['PrecioTotal'=>$pedido->PrecioTot]);

        //ACTUALIZAMOS EL STOCK DEL PRODUCTO
        $stock=($producto->Stock)-$Cantidad+($laststock->Cantidad);

        DB::table('producto')->where('Id',$Id_Producto)
        ->update(['Stock'=>$stock]);

        return redirect()->route('Pedido.show',$Id_Pedido);
    }


    public function destroy($Id_Pedido,$Id_Producto)
    {
                //OBTENEMOS EL PRECIO UNITARIO
                $detalle=DB::table('detallepedido')
                ->select('Id_Producto','Id_Pedido','Cantidad','SubTotal')
                ->where('Id_Producto',$Id_Producto)->where('Id_Pedido',$Id_Pedido)
                ->first();

                //ACTUALIZAMOS EL STOCK DEL PRODUCTO
                $stock=DB::table('producto')->select('Stock')->where('Id','=',$Id_Producto)
                ->first();
                $stock->Stock=($stock->Stock)+($detalle->Cantidad);

                //ELIMINAMOS EL DETALLE
                DB::table('detallepedido')
                ->where('Id_Producto','=',$Id_Producto)->where('Id_Pedido','=',$Id_Pedido)
                ->delete();

                //ACTUALIZAMOS EL PRECIOTOTAL
                $pedido=Pedido::findOrFail($Id_Pedido);
                $precioTot=($pedido->PrecioTotal)-($detalle->SubTotal);

                DB::table('pedido')->where('id',$pedido->Id)
                ->update(['PrecioTotal'=>$precioTot]);

                DB::table('producto')->where('Id',$Id_Producto)
                ->update(['Stock'=>$stock->Stock]);

                return redirect()->route('Pedido.show',$Id_Pedido);
    }
}
