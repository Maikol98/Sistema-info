<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//HOME
Route::get('/',['as'=>'home','uses'=>'PagesController@home']);

//CLIENTE
Route::get('Cliente',['as'=>'Cliente','uses'=>'PagesController@Cliente']);

Route::post('RegCliente', 'clienteController@store' );


//COMPRAS

Route::get('Compras',['as'=>'Compras','uses'=>'PagesController@Compras']);



//PRODUCTO
Route::get('Producto',['as'=>'Producto','uses'=>'PagesController@Producto']);



//PROVEEDOR
Route::get('Proveedor',['as'=>'Proveedor','uses'=>'PagesController@Proveedor']);


//VENTAS
Route::get('Ventas',['as'=>'Ventas','uses'=>'PagesController@Ventas']);


//CIUDAD
Route::get('createCiudad', ['as'=>'Ciudad','uses'=>'PagesController@CiudadDistrito'] );

Route::post('RegCiudad','ciudadController@store');

Route::post('RegCiudad', 'ciudadController@store');

Route::post('RegDistrito','distritoController@store');

