<?php

namespace App\Http\Controllers;

use App\Notacompra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class notacompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notacompra=DB::table('notacompra')
        ->join('proveedor','proveedor.Id','=','notacompra.Id_Proveedor')
        ->select('notacompra.id','FechaCompra','PrecioTotal','proveedor.Cod_Proveedor')
        ->where('PrecioTotal','>','0')
        ->get();

        return view('Compra/Compra/index',compact('notacompra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Compra/Compra/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $IdProveedor=DB::table('proveedor')
        ->select('Id')->where('Cod_Proveedor','=',$request->input('Codigo'))
        ->pluck('Id');

        $notacompra=new Notacompra();
        $notacompra->FechaCompra=date('Y-m-d H:i:s');
        $notacompra->PrecioTotal=0;
        $notacompra->Id_Proveedor=$IdProveedor[0];

        $notacompra->save();

        $dato=$notacompra->Id;

        return view('Compra/Compra/DetalleCompra',compact('dato'));
    }


    public function detalle($id)
    {   $dato=$id;
        return view('Compra/Compra/DetalleCompra',compact('dato'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detallecompra=DB::table('notaproductocompra')
        ->select('Id_Producto','Id_Compra','Cantidad','PrecioUnitario')
        ->where('Id_Compra','=',$id)->get();

        return view('Compra/Compra/indexDetalle',compact('detallecompra'));
    }
}
