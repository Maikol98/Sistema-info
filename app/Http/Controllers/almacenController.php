<?php

namespace App\Http\Controllers;

use App\Almacen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Bitacora;
use Illuminate\Support\Facades\Auth;

class almacenController extends Controller
{

    function __construct()
    {
        $this->middleware(['auth','roles:Admin']);
    }

    public function index()
    {
        $almacen=DB::table('almacen')
        ->select('Id','Dimension','Capacidad','Direccion')
        ->get();
        return view('Almacen/almacen/index',compact('almacen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Almacen/Almacen/almacen');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $almacen=new Almacen();
        $almacen->Dimension=$request->input('Dimension');
        $almacen->Capacidad=$request->input('Capacidad');
        $almacen->Direccion=$request->input('Direccion');
        $almacen->Estado=1;
        $almacen->save();

        $bitacora = new Bitacora();
        $bitacora->fecha = date('Y-m-d H:i:s');
        $bitacora->nombreUser = Auth::user()->name;
        $bitacora->accion = 'Añadio Nuevo almacen';
        $bitacora->tipo='Almacen';
        $bitacora->save();

        return redirect()->route('Almacen.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estante=DB::table('estante')
        ->join('categoria','categoria.Id','=','estante.Id_Categoria')
        ->select('estante.Id as idEstante','Capacidad','Descripcion','Id_Almacen','Id_Categoria','Nombre','Estado')
        ->where('estante.Estado','=','1','and','Id_Almacen','=',$id)->get();
        return view('Almacen/Estante/index',compact('estante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $almacen=Almacen::findOrFail($id);

        return view('Almacen/Almacen/edit',compact('almacen'));
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
        $almacen=Almacen::findOrFail($id);
        $almacen->Dimension=$request->input('Dimension');
        $almacen->Capacidad=$request->input('Capacidad');


        $bitacora = new Bitacora();
        $bitacora->fecha = date('Y-m-d H:i:s');
        $bitacora->nombreUser = Auth::user()->name;
        $bitacora->accion = 'Actualizo datos del almacen';
        $bitacora->tipo='Almacen';
        $bitacora->save();

        $almacen->update();
        return redirect()->route('Almacen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $almacen=Almacen::findOrFail($id);
        $almacen->Estado=0;
        $almacen->update();


        $bitacora = new Bitacora();
        $bitacora->fecha = date('Y-m-d H:i:s');
        $bitacora->nombreUser = Auth::user()->name;
        $bitacora->accion = 'Elimino almacen';
        $bitacora->tipo='Almacen';
        $bitacora->save();

        return redirect()->route('Almacen.index');
    }
}
