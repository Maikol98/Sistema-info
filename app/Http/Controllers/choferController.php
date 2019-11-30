<?php

namespace App\Http\Controllers;

use App\Chofer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class choferController extends Controller
{

    function __construct()
    {
        $this->middleware(['auth','roles:Admin']);
    }

    public function index()
    {
        $chofer=DB::table('chofer')
        ->select('Id','Ci_Chofer','Nombre','Telefono','Direccion')
        ->where('Estado','=','1')->get();

        return view('Pedido/Chofer/index',compact('chofer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pedido/Chofer/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chofer=new Chofer();
        $chofer->Ci_Chofer=$request->input('Ci');
        $chofer->Nombre=$request->input('nombre');
        $chofer->Telefono=$request->input('telefono');
        $chofer->Direccion=$request->input('direccion');
        $chofer->Estado=1;

        $chofer->save();

        return redirect()->route('Chofer.index');
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
        $chofer=Chofer::findOrFail($id);

        return view('Pedido/Chofer/edit',compact('chofer'));
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
        $chofer=Chofer::findOrFail($id);
        $chofer->Nombre=$request->input('nombre');
        $chofer->Telefono=$request->input('telefono');
        $chofer->Direccion=$request->input('direccion');

        $chofer->update();

        return redirect()->route('Chofer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chofer=Chofer::findOrFail($id);
        $chofer->Estado=0;
        $chofer->update();

        return redirect()->route('Chofer.index');
    }
}
