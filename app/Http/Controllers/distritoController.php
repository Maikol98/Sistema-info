<?php

namespace App\Http\Controllers;

use App\Distrito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class distritoController extends Controller
{

    function __construct()
    {
        $this->middleware(['auth','roles:Admin'],['except'=>['index','show']]);
    }

    public function index()
    {
        $distrito=DB::table('distrito')
        ->join('ciudad','ciudad.Id','=','distrito.Id_Ciudad')
        ->select('distrito.Id','ciudad.Nombre as ciudad','Nro_Distrito','distrito.Nombre')
        ->where('distrito.Estado','=','1')
        ->get('Id','ciudad','Nro_Distrito','Nombre');
        return view('Ciudad/indexDistrito',compact('distrito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Ciudad/createDistrito');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $distrito=new Distrito();
        $distrito->Nro_Distrito=$request->input('NroDistrito');
        $distrito->Nombre=$request->input('Nombre');
        $distrito->Id_Ciudad=$request->input('CodCiudad');
        $distrito->Estado=1;
        //obtenemos el id de la ciudad
        $ciudad=$distrito->Id_Ciudad;
        $distrito->save();

        return view('Ciudad/createDistrito', compact('ciudad'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $distrito=DB::table('distrito')
        ->join('ciudad','ciudad.Id','=','distrito.Id_Ciudad')
        ->select('distrito.Id','Id_Ciudad','ciudad.Nombre as ciudad','Nro_Distrito','distrito.Nombre','distrito.Estado')
        ->where('ciudad.Id','=',$id)->where('distrito.Estado','=','1')
        ->get();
        return view('Ciudad/indexDistrito',compact('distrito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $distrito=Distrito::findOrFail($id);
        return view('Ciudad/editDistrito',compact('distrito'));
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
        $distrito=Distrito::findOrFail($id);
        $distrito->Nro_Distrito=$request->input('NroDistrito');
        $distrito->Nombre=$request->input('Nombre');
        $distrito->Id_Ciudad=$request->input('Ciudad');
        $id=$distrito->Id_Ciudad;
        $distrito->update();

        return redirect()->route('Distrito.show',$id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $distrito=Distrito::findOrFail($id);
        $distrito->Estado=0;
        $id=$distrito->Id_Ciudad;
        $distrito->update();

        return redirect()->route('Distrito.show',$id);
    }
}
