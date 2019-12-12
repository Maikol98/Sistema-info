<?php

namespace App\Http\Controllers;


use App\Ciudad;
use Illuminate\Http\Request;
use App\Bitacora;
use Illuminate\Support\Facades\Auth;

class ciudadController extends Controller
{
    function __construct()
    {
        $this->middleware(['auth','roles:Admin']);
    }
//asd

    public function index()
    {
        $ciudad=Ciudad::all();
        return view('Ciudad/indexCiudad',compact('ciudad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Ciudad/createCiudad');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ciudad=new Ciudad();
        $ciudad->Nombre=$request->input('Nombre');
        $ciudad->save();

        return redirect()-> route('Ciudad.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dato=Ciudad::findOrFail($id);
        $ciudad=$dato->Id;
        return view('Ciudad/createDistrito', compact('ciudad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ciudad=Ciudad::findOrFail($id);
        return view('Ciudad/editCiudad',compact('ciudad'));
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
        $ciudad=Ciudad::findOrFail($id);
        $ciudad->Nombre=$request->input('Nombre');
        $ciudad->update();


        return redirect()-> route('Ciudad.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ciudad::findOrFail($id)->delete();

        return redirect()-> route('Ciudad.index');
    }
}
