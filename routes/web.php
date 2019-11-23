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

//ALMACEN
Route::resource('Almacen', 'almacenController');
Route::resource('Estante', 'estanteController');
Route::resource('Categoria', 'categoriaController');

//CIUDAD Y DISTRITO
Route::resource('Ciudad', 'ciudadController');
Route::resource('Distrito', 'distritoController');


//PRODUCTO
Route::resource('Producto', 'productoController');
Route::resource('Baja', 'bajaController');
Route::resource('Garantia', 'garantiaController');


//NOTA VENTA
Route::resource('Notaventa', 'notaventaController');
Route::resource('DetalleVenta', 'notaproductoventaController');
Route::resource('Administrador', 'administradorController');


//COMPRA
Route::resource('Proveedor', 'proveedorController');
//NOTA COMPRA
Route::resource('NotaCompra', 'notacompraController');
Route::post('NotaCompra/{id}',['as'=>'NotaCompra.detalle','uses'=>'notacompraController@detalle'] );

//DETALLE DE COMPRA
Route::resource('DetalleCompra', 'notaproductocompraController');

Route::get('DetalleCompra/{Id_Producto}/{Id_Compra}/editar',['as'
=>'DetalleCompra.editar','uses'=>'notaproductocompraController@editar']);

Route::put('DetalleCompra/{Id_Producto}/{Id_Compra}',['as'
=>'DetalleCompra.actualizar','uses'=>'notaproductocompraController@actualizar'] );

Route::post('DetalleCompra/{Id_Producto}/{Id_Compra}/eliminar',['as'
=>'DetalleCompra.eliminar','uses'=>'notaproductocompraController@eliminar'] );

//PEDIDOS


//INGRESO SALIDA








