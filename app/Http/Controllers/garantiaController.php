<?php

namespace App\Http\Controllers;

use App\Garantia;
use Illuminate\Http\Request;

class garantiaController extends Controller
{

    function __construct()
    {
        $this->middleware(['auth','roles:Admin']);
    }

    public function index()
    {
        $garantia=Garantia::all();

        return view('Producto/Garantia/index', compact('garantia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Producto/Garantia/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $garantia= new Garantia();
        $garantia->Cod_Garantia=$request->input('codigo');
        $garantia->Duracion=$request->input('duracion');

        $garantia->save();

        return redirect()->route('Garantia.index');
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
        $garantia=Garantia::findOrFail($id);
        return view('Producto/Garantia/edit',compact('garantia'));
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
        $garantia=Garantia::findOrFail($id);
        $garantia->Duracion=$request->input('duracion');

        $garantia->update();

        return redirect()->route('Garantia.index');
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
