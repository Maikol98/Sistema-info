<?php

namespace App\Http\Controllers;

use App\Administrador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class administradorController extends Controller
{
    function __construct()
    {
        $this->middleware(['auth','roles:Admin']);
    }


    public function index()
    {
        $admin=DB::table('administrador')
        ->select('Id','Cod_Admin','Nombre','Telefono','Email')
        ->where('Estado','=','1')->get();
        return view('Venta/Administrador/index', compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Venta/Administrador/createAdmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $administrador=new Administrador();
        $administrador->Cod_Admin=$request->input('CodAdmin');
        $administrador->Nombre=$request->input('nombre');
        $administrador->Telefono=$request->input('telefono');
        $administrador->Email=$request->input('email');
        $administrador->Estado=1;

        $administrador->save();

        return redirect()->route('CrearAdmin');
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
        $administrador=Administrador::findOrFail($id);
        return view('Venta/Administrador/edit',compact('administrador'));
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
        $administrador=Administrado::findOrFail($id);

        $administrador->Nombre=$request->input('nombre');
        $administrador->Telefono=$request->input('telefono');
        $administrador->Email=$request->input('email');

        $administrador->update();
        return redirect()->route('Administrador.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $administrador=Administrado::findOrFail($id);
        $administrador->Estado=0;

        $administrador->update();
        return redirect()->route('Administrador.index');
    }
}
