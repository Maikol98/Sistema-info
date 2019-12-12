<?php

namespace App\Http\Controllers;

use App\Bitacora;
use App\Devolucion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class devolucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devolucion=Devolucion::all();
        return view('Pedido/Devolucion/index',compact('devolucion'));
    }


    public function lista()
    {
        $devolucion=DB::table('pedido')
        ->join('cliente','cliente.Id','=','pedido.Id_Cliente')
        ->select('pedido.Id','PrecioTotal','FechaPedido','cliente.Ci_Cliente')
        ->where('pedido.Estado','=','No Entregado')
        ->get();
        return view('Pedido/Devolucion/indexPedido',compact('devolucion'));
    }

    public function detalle($id)
    {
        $devolucion=DB::table('detallepedido')
        ->join('producto','producto.Id','=','detallepedido.Id_Producto')
        ->select('detallepedido.Id','Cantidad','Nombre')
        ->where('detallepedido.Id_Pedido','=',$id)
        ->get();
        return view('Pedido/Devolucion/indexDetalle',compact('devolucion'));
    }


    public function create($id)
    {
        $dato=$id;
        return view('Pedido/Devolucion/create',compact('dato'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $devolucion=new Devolucion();
        $devolucion->Fecha=date('Y-m-d H:i:s');
        $devolucion->Descripcion=$request->input('descripcion');
        $devolucion->Cantidad=$request->input('cantidad');
        $devolucion->Id_DetallePedido=$request->input('iddetalle');

        $devolucion->save();

        $bitacora = new Bitacora();
        $bitacora->fecha = date('Y-m-d H:i:s');
        $bitacora->nombreUser = Auth::user()->name;
        $bitacora->accion = 'Registro devolucion';
        $bitacora->tipo='Devolucion';
        $bitacora->save();

        return redirect()->route('Devolucion.index');
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
        //
    }
}
