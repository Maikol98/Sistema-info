<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Bitacora;
use Illuminate\Support\Facades\Auth;

class proveedorController extends Controller
{

    function __construct()
    {
        $this->middleware(['auth','roles:Admin']);
    }

    public function index()
    {
        $proveedor=DB::table('proveedor')
        ->select('Id','Cod_Proveedor','Nombre','Direccion','Telefono','Email','Tipo')
        ->where('Estado','=','1')
        ->get();
        return view('Compra/Proveedor/index',compact('proveedor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Compra/Proveedor/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proveedor=new Proveedor();
        $proveedor->Cod_Proveedor=$request->input('codigo');
        $proveedor->Nombre=$request->input('nombre');
        $proveedor->Direccion=$request->input('direccion');
        $proveedor->Telefono=$request->input('telefono');
        $proveedor->Email=$request->input('email');
        $proveedor->Tipo=$request->input('tipo');
        $proveedor->Estado=1;

        $proveedor->save();

        $bitacora = new Bitacora();
        $bitacora->fecha = date('Y-m-d H:i:s');
        $bitacora->nombreUser = Auth::user()->name;
        $bitacora->accion = 'Añadio nuevo Proveedor';
        $bitacora->save();

        return redirect()->route('Proveedor.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedor=Proveedor::findOrFail($id);

        return view('Compra/Proveedor/edit', compact('proveedor'));
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
        $proveedor=Proveedor::findOrFail($id);

        $proveedor->Nombre=$request->input('nombre');
        $proveedor->Direccion=$request->input('direccion');
        $proveedor->Telefono=$request->input('telefono');
        $proveedor->Email=$request->input('email');
        $proveedor->Tipo=$request->input('tipo');

        $proveedor->update();

        $bitacora = new Bitacora();
        $bitacora->fecha = date('Y-m-d H:i:s');
        $bitacora->nombreUser = Auth::user()->name;
        $bitacora->accion = 'Actualizo datos del Proveedor';
        $bitacora->save();

        return redirect()->route('Proveedor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedor=Proveedor::findOrFail($id);
        $proveedor->Estado=0;
        $proveedor->update();

        $bitacora = new Bitacora();
        $bitacora->fecha = date('Y-m-d H:i:s');
        $bitacora->nombreUser = Auth::user()->name;
        $bitacora->accion = 'elimino Proveedor';
        $bitacora->save();

        return redirect()->route('Proveedor.index');
    }
}
