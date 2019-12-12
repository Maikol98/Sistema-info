<?php

namespace App\Http\Controllers;

use App\Bitacora;
use App\Entregapedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class entregapedidoController extends Controller
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
        $entregapedido=Entregapedido::all();
        return view('Pedido/EntregaPedido/index',compact('entregapedido'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pedido/EntregaPedido/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dato=DB::table('chofer')->select('Id')
        ->where('Ci_Chofer',$request->input('CiChofer'))->first();
        $entregapedido= new Entregapedido();
        $entregapedido->Fecha=date('Y-m-d H:i:s');
        $entregapedido->Id_Chofer=$dato->Id;
        $entregapedido->PlacaVehiculo=$request->input('placa');
        $entregapedido->save();
        $Id=$entregapedido->Id;

        $bitacora = new Bitacora();
        $bitacora->fecha = date('Y-m-d H:i:s');
        $bitacora->nombreUser = Auth::user()->name;
        $bitacora->accion = 'Registro nueva entrega de pedido';
        $bitacora->tipo='Entrega Pedido';
        $bitacora->save();

        return redirect()->route('DetalleEntregaPedido.index',$Id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datos=DB::table('detalleentregapedido')->where('IdPedido',$id)->get();
        return view('Pedido/EntregaPedido/inde',compact('datos'));
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
