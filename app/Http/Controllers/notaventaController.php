<?php

namespace App\Http\Controllers;

use App\Notaproductocompra;
use App\Notaventa;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Bitacora;
use Illuminate\Support\Facades\Auth;

class notaventaController extends Controller
{

    function __construct()
    {
        $this->middleware(['auth','roles:Admin']);
    }


    public function index()
    {
        $notaventa=DB::table('notaventa')
        ->join('cliente','cliente.Id','=','notaventa.Id_Cliente')
        ->select('notaventa.Id','PrecioTotal','FechaVenta','Ci_Cliente')
        ->get();
        return view('Venta/NotaVenta/index',compact('notaventa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Venta/NotaVenta/createVentas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dato=DB::table('cliente')->select('Id')
        ->where('Ci_Cliente','=',$request->input('CiCliente'))
        ->pluck('Id');

        $notaventa=new Notaventa();
        $notaventa->PrecioTotal=0;
        $notaventa->FechaVenta=date('Y-m-d H:i:s');
        $notaventa->Id_Cliente=$dato[0];
        $notaventa->save();

        $bitacora = new Bitacora();
        $bitacora->fecha = date('Y-m-d H:i:s');
        $bitacora->nombreUser = Auth::user()->name;
        $bitacora->accion = 'Inserto Nueva Venta';
        $bitacora->tipo='Nota venta';
        $bitacora->save();

        $dato=$notaventa->Id;

        return view('Venta/NotaProducto/crearNota', compact('dato'));
    }


    public function detalle($id)
    {   $dato=$id;
        return view('Venta/NotaProducto/crearNota',compact('dato'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalleventa=DB::table('notaproductoventa')
        ->select('Id_Producto','Id_NotaVenta','Cantidad','PrecioUnitario')
        ->where('Id_NotaVenta','=',$id)->get();

        return view('Venta/NotaProducto/index',compact('detalleventa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$notaventa=Notaventa::findOrFail($id);

        //return view('Venta/NotaVenta/edit',compact('notaventa'));
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
        Notaventa::findOrFail($id)->delete();

        $bitacora = new Bitacora();
        $bitacora->fecha = date('Y-m-d H:i:s');
        $bitacora->nombreUser = Auth::user()->name;
        $bitacora->accion = 'Elimino Venta';
        $bitacora->tipo='Nota venta';
        $bitacora->save();

        return redirect()->route('Notaventa.index');
    }
}
