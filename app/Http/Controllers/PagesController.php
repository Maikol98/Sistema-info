<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }


    public function Compras(){
        return view('Compra/Compras');
    }

    public function Producto(){
        return view('Producto/Producto');
    }

    public function Proveedor(){
        return view('Compra/Proveedor');
    }

    public function Ventas(){
        return view('Venta/Ventas');
    }


    public function createAdmin(){
        return view('Venta/createAdmin');
    }
}
