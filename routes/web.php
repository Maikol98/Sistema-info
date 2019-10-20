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
Route::resource('Cliente', 'clienteController');
//Route::get('Cliente/create',['as'=>'Cliente.create','uses'=>'clienteController@create']);
//Route::post('Cliente',['as'=>'Cliente.store','uses'=>'clienteController@store'] );
//Route::get('Cliente',['as'=>'Cliente.index','uses'=>'clienteController@index']);
//Route::get('Cliente/{id}/edit',['as'=>'Cliente.edit','uses'=>'clienteController@edit'] );
//Route::put('Cliente/{id}',['as'=>'Cliente.update','uses'=>'clienteController@update'] );
//Route::delete('Cliente/{id}',['as'=>'Cliente.destroy','uses'=>'clienteController@destroy'] );

// login
Route::get('login','Auth\LoginController@showLoginForm');


//COMPRAS

Route::get('Compras',['as'=>'Compras','uses'=>'PagesController@Compras']);



//PRODUCTO
Route::get('Producto',['as'=>'Producto','uses'=>'PagesController@Producto']);



//PROVEEDOR
Route::get('Proveedor',['as'=>'Proveedor','uses'=>'PagesController@Proveedor']);


//VENTAS
Route::get('Ventas',['as'=>'Ventas','uses'=>'PagesController@Ventas']);

Route::get('CrearAdmin',['as'=>'Admin','uses'=>'PagesController@createAdmin'] );
Route::post('RegAdmin','administradorController@store');

//CIUDAD
Route::resource('Ciudad', 'ciudadController');
Route::resource('Distrito', 'distritoController');
//Route::get('createCiudad', ['as'=>'Ciudad','uses'=>'PagesController@CiudadDistrito'] );
//Route::post('RegCiudad','ciudadController@store');
//Route::post('RegCiudad', 'ciudadController@store');
//Route::post('RegDistrito','distritoController@store');

