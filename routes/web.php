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
//ESTANTE
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
Route::get('Notaventa/{id}/Detalle',['as'=>'Notaventa.detalle','uses'=>'notaventaController@detalle'] );

Route::resource('DetalleVenta', 'notaproductoventaController');

Route::get('DetalleVenta/{Id_Producto}/{Id_Compra}/editar',['as'
=>'DetalleVenta.editar','uses'=>'notaproductoventaController@editar']);

Route::put('DetalleVenta/{Id_Producto}/{Id_Venta}',['as'
=>'DetalleVenta.actualizar','uses'=>'notaproductoventaController@actualizar'] );

Route::post('DetalleVenta/{Id_Producto}/{Id_Venta}/eliminar',['as'
=>'DetalleVenta.eliminar','uses'=>'notaproductoventaController@eliminar'] );




Route::resource('Administrador', 'administradorController');


//COMPRA
Route::resource('Proveedor', 'proveedorController');

//NOTA COMPRA
Route::resource('NotaCompra', 'notacompraController');
Route::get('NotaCompra/{id}/Detalle',['as'=>'NotaCompra.detalle','uses'=>'notacompraController@detalle'] );


//DETALLE DE COMPRA //ELIMINAR ALGUNAS RUTAS
Route::resource('DetalleCompra', 'notaproductocompraController');

Route::get('DetalleCompra/{Id_Producto}/{Id_Compra}/editar',['as'
=>'DetalleCompra.editar','uses'=>'notaproductocompraController@editar']);

Route::put('DetalleCompra/{Id_Producto}/{Id_Compra}',['as'
=>'DetalleCompra.actualizar','uses'=>'notaproductocompraController@actualizar'] );

Route::post('DetalleCompra/{Id_Producto}/{Id_Compra}/eliminar',['as'
=>'DetalleCompra.eliminar','uses'=>'notaproductocompraController@eliminar'] );



//PEDIDOS

//CHOFER
Route::resource('Chofer', 'choferController');
//VEHICULO
Route::resource('Vehiculo', 'vehiculoController');

//INGRESO SALIDA


//LOGIN

/*TEMPORAL
Route::get('test', function () {
$user=new App\User;
$user->name='Henrry Roca';
$user->email='Roca@gmail.com';
$user->password=bcrypt('12345');
$user->role='Admin';
$user->save();
return $user;
});*/


Route::get('login',['as'=>'login','uses'=>'Auth\LoginController@showLoginForm']);
Route::post('login','Auth\LoginController@login');
Route::get('logout','Auth\LoginController@logout');


Route::resource('usuarios','UsersController');


Route::get('Bitacora',['as'=>'Bitacora.index','uses'=>'bitacoraController@index']);






