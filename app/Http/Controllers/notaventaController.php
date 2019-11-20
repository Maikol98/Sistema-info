<?php

namespace App\Http\Controllers;

use App\Notaproductocompra;
use App\Notaventa;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class notaventaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notaventa=DB::table('notaventa')
        ->select('Id','PrecioTotal','Fechaventa','Id_Cliente','Id_Admin')
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
        return view('Venta/Notaventa/createVentas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $notaventa=new Notaventa();
        $notaventa->PrecioTotal=0;
        $notaventa->FechaVenta=date('Y-m-d H:i:s');
        $notaventa->Id_Cliente=$request->input('CiCliente');
        $notaventa->Id_Admin=$request->input('CodAdmin');
        $notaventa->save();
        return redirect()->route('Notaventa.index');
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
        return redirect()->route('Notaventa.index');
    }
}
