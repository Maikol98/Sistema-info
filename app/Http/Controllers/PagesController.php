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


    public function createAdmin(){
        return view('Venta/createAdmin');
    }
}
