<?php

namespace App\Http\Controllers;

use App\Notaproductoventa;
use App\Notaventa;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class notaproductoventaController extends Controller
{

    function __construct()
    {
        $this->middleware(['auth','roles:Admin']);
    }

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
        $dato=DB::table('producto')
        ->select('Id','Precio')
        ->where('Cod_Producto','=',$request->input('Codigo'))
        ->first();


        $detalleventa=new Notaproductoventa();
        $detalleventa->Id_Producto=$dato->Id;
        $detalleventa->Id_NotaVenta=$request->input('nota');
        $detalleventa->Cantidad=$request->input('cantidad');
        $detalleventa->PrecioUnitario=($dato->Precio)*($detalleventa->Cantidad);

        //SACAMOS CALCULO DEL PRECIO TOTAL
        $notaventa=Notaventa::findOrFail($detalleventa->Id_NotaVenta);
        $precioTot=($notaventa->PrecioTotal)+($detalleventa->PrecioUnitario);
        //CALCULAMOS NUEVOS DATOS DEL PRODUCTO
        $producto=Producto::findOrFail($dato->Id);
        $stock=($producto->Stock)-($detalleventa->Cantidad);

        //REGISTRAMOS EL DETALLE DE LA COMPRA
        $detalleventa->save();

        DB::table('producto')->where('Id',$producto->Id)
        ->update(['Stock'=>$stock]);

        //ACTUALIZAMOS EL VALOR DEL ATRIBUTO PRECIO TOTAL
        DB::table('notaventa')->where('Id',$notaventa->Id)
        ->update(['PrecioTotal'=>$precioTot]);
        $dato=$notaventa->Id;

        return view('Venta/NotaProducto/crearNota', compact('dato'));
    }


    //NOS MANDA A LA INTERFACE PARA EDITAR
    public function editar($Id,$IdVenta)
    {
        $detalleventa=DB::table('notaproductoventa')
        ->select('Id_Producto','Id_NotaVenta','Cantidad','PrecioUnitario')
        ->where('Id_Producto','=',$Id)->where('Id_NotaVenta','=',$IdVenta)
        ->first();
        return view('Venta/NotaProducto/edit', compact('detalleventa'));
    }


    //ACTUALLIZA LOS DATOS
    public function actualizar(Request $request,$id,$idVenta)
    {
        $producto=Producto::findOrFail($id);

        $Cantidad=$request->input('cantidad');
        $PrecioUn=($producto->Precio)*$Cantidad;

        $laststock=DB::table('notaproductoventa')->select('Cantidad')
        ->where('Id_Producto','=',$id)->where('Id_NotaVenta','=',$idVenta)
        ->first();

        // ACTUALIZAMOS DATOS DEL DETALLE
        DB::table('notaproductoventa')
        ->where('Id_Producto','=',$id)->where('Id_NotaVenta','=',$idVenta)
        ->update(['Cantidad'=>$Cantidad,'PrecioUnitario'=>$PrecioUn]);

        //ACTUALIZAMOS DATOS DE LA VENTA
        $nota=DB::table('notaproductoventa')->select(DB::raw('SUM(PrecioUnitario) as PrecioTot'))
        ->where('notaproductoventa.Id_NotaVenta','=',$idVenta)->first();

        DB::table('notaventa')->where('notaventa.Id','=',$idVenta)
        ->update(['PrecioTotal'=>$nota->PrecioTot]);

        //ACTUALIZAMOS EL STOCK DEL PRODUCTO
        $stock=($producto->Stock)-$Cantidad+($laststock->Cantidad);

        DB::table('producto')->where('Id',$id)
        ->update(['Stock'=>$stock]);

        return redirect()->route('Notaventa.show',$idVenta);
    }



    public function eliminar($Id,$idVenta)
    {
        //OBTENEMOS EL PRECIO UNITARIO
        $detalleventa=DB::table('notaproductoventa')
        ->select('Id_Producto','Id_NotaVenta','Cantidad','PrecioUnitario')
        ->where('Id_Producto','=',$Id)->where('Id_NotaVenta','=',$idVenta)
        ->first();

        //ACTUALIZAMOS EL STOCK DEL PRODUCTO
        $stock=DB::table('producto')->select('Stock')->where('Id','=',$Id)
        ->first();
        $stock->Stock=($stock->Stock)+($detalleventa->Cantidad);

        $lastPrecioUni=$detalleventa->PrecioUnitario;

        //ELIMINAMOS EL DETALLE
        $detalleventa=DB::table('notaproductoventa')
        ->where('Id_Producto','=',$Id)->where('Id_NotaVenta','=',$idVenta)
        ->delete();

        //ACTUALIZAMOS EL PRECIOTOTAL
        $notaventa=Notaventa::findOrFail($idVenta);
        $precioTot=($notaventa->PrecioTotal)-$lastPrecioUni;

        DB::table('notaventa')->where('id',$notaventa->Id)
        ->update(['PrecioTotal'=>$precioTot]);

        DB::table('producto')->where('Id',$Id)
        ->update(['Stock'=>$stock->Stock]);

        return redirect()->route('Notaventa.show',$idVenta);
    }

}
