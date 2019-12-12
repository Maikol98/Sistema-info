<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;

class reporteController extends Controller
{
    public function ReporteVenta()
    {
        $dato=DB::table('notaventa')->join('notaproductoventa','notaproductoventa.Id_NotaVenta','=','notaventa.Id')
        ->join('producto','producto.Id','=','notaproductoventa.Id_Producto')
        ->select('notaventa.Id','PrecioTotal','FechaVenta','Nombre','Cantidad')
        ->get();
        $pdf=PDF::loadView('pdf.reporteventa',compact('dato'));
        return $pdf->download('Reporte.pdf');
    }

    public function ReportePedido()
    {
        $dato=DB::table('pedido')->join('detallepedido','detallepedido.Id_Pedido','=','Pedido.Id')
        ->join('producto','producto.Id','=','detallepedido.Id_Producto')
        ->select('pedido.Id','PrecioTotal','FechaPedido','FechaEntrega','Direccion','pedido.Estado','Nombre','Cantidad','SubTotal')
        ->get();
        $pdf=PDF::loadView('pdf.reportePedido',compact('dato'));
        return $pdf->download('Reporte.pdf');
    }

    public function ReporteCompra()
    {
        $dato=DB::table('notacompra')->join('notaproductocompra','notaproductocompra.Id_Compra','=','notacompra.Id')
        ->join('producto','producto.Id','=','notaproductocompra.Id_Producto')
        ->select('notacompra.Id','FechaCompra','Nombre','Cantidad','PrecioUnitario')
        ->get();
        $pdf=PDF::loadView('pdf.reporteCompra',compact('dato'));
        return $pdf->download('Reporte.pdf');
    }
}
