<?php

namespace App\Http\Controllers;

use App\Detalleentregapedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class detalleentregapedidoController extends Controller
{
    public function index($Id)
    {
        $entrega=DB::table('pedido')->where('pedido.Estado','=','No Entregado')->get();
        $dato=$Id;

        return view('Pedido/EntregaPedido/indexDetalle',compact(['entrega','dato']));
    }

    public function crear($Pedido,$Entrega)
    {
        DB::table('pedido')->where('Id',$Pedido)->update(['Estado'=>'Entregado']);
        $detalleentregapedido=new Detalleentregapedido();
        $detalleentregapedido->IdPedido=$Pedido;
        $detalleentregapedido->IdEntrega=$Entrega;
        $detalleentregapedido->save();
        return redirect()->route('DetalleEntregaPedido.index',$Pedido);
    }

}
