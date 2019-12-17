<?php

namespace App\Http\Controllers;

use App\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Bitacora;
use App\Producto;
use Illuminate\Support\Facades\Auth;

class pedidoController extends Controller
{
    function __construct()
    {
        $this->middleware(['auth','roles:Admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedido=DB::table('pedido')
        ->join('cliente','cliente.Id','=','pedido.Id_Cliente')
        ->select('pedido.Id','PrecioTotal','FechaPedido','FechaEntrega','pedido.Direccion','Descripcion','pedido.Estado','cliente.Ci_Cliente')
        ->get();

        return view('Pedido/Pedido/index',compact('pedido'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pedido/Pedido/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente=DB::table('cliente')
        ->select('Id')->where('Ci_Cliente','=',$request->input('CiCliente'))
        ->pluck('Id');

        $pedido=new Pedido();
        $pedido->PrecioTotal=0;
        $pedido->FechaPedido=date('Y-m-d H:i:s');
        $pedido->FechaEntrega=$request->input('fechaentrega');
        $pedido->Direccion=$request->input('direccion');
        $pedido->Descripcion=$request->input('descripcion');
        $pedido->Estado='No Entregado';
        $pedido->Id_Cliente=$cliente[0];

        $pedido->save();

        $bitacora = new Bitacora();
        $bitacora->fecha = date('Y-m-d H:i:s');
        $bitacora->nombreUser = Auth::user()->name;
        $bitacora->accion = 'Inserto Nuevo Pedido';
        $bitacora->tipo='Pedido';
        $bitacora->save();

        return redirect()->route('Pedido.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalle=DB::table('detallepedido')
        ->join('producto','producto.Id','=','detallepedido.Id_Producto')
        ->select('detallepedido.Id','SubTotal','Cantidad','Descripcion','Id_Producto','Id_Pedido','Nombre')
        ->where('Id_Pedido','=',$id)->get();

        return view('Pedido/Pedido/indexDetalle',compact('detalle'));
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
        Pedido::findOrFail($id)->delete();
        $bitacora = new Bitacora();
        $bitacora->fecha = date('Y-m-d H:i:s');
        $bitacora->nombreUser = Auth::user()->name;
        $bitacora->accion = 'Elimino Pedido';
        $bitacora->tipo='Pedido';
        $bitacora->save();

        return redirect()->route('Pedido.index');
    }
}
