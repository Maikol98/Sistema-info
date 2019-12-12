<?php

namespace App\Http\Controllers;

use App\Bitacora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bitacoraController extends Controller
{
    function __construct()
    {
        $this->middleware(['auth','roles:Admin']);
    }

    public function Bitacora($tipo)
    {
        $bitacora=DB::table('bitacoras')->where('tipo',$tipo)->get();
        return view('Bitacora/index', compact('bitacora'));
    }

}
