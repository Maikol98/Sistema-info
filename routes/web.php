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

//INGRESO SALIDA
Route::resource('Ingresosalida', 'ingresosalidaController');

//CIUDAD Y DISTRITO
Route::resource('Ciudad', 'ciudadController');
Route::resource('Distrito', 'distritoController');


//PRODUCTO
Route::resource('Producto', 'productoController');
Route::get('Listado',['as'=>'Producto.listado','uses'=>'productoController@listado']);
Route::resource('Baja', 'bajaController');


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
//PEDIDO
Route::resource('Pedido', 'pedidoController');

//DETALLE PEDIDO
Route::get('Detallepedido/{id}',['as'=>'Detallepedido.create','uses'=>'detallepedidoController@create']);
Route::post('Detallepedido',['as'=>'Detallepedido.store','uses'=>'detallepedidoController@store'] );
Route::get('Detallepedido/{Id_Pedido}/{Id_Producto}/editar',['as'
=>'Detallepedido.edit','uses'=>'detallepedidoController@edit']);
Route::put('Detallepedido/{Id_Pedido}/{Id_Producto}',['as'
=>'Detallepedido.update','uses'=>'detallepedidoController@update']);
Route::post('Detallepedido/{Id_Pedido}/{Id_Producto}/eliminar',['as'
=>'Detallepedido.destroy','uses'=>'detallepedidoController@destroy']);

//DEVOLUCION
Route::resource('Devolucion', 'devolucionController');
Route::get('listaPedido',['as'=>'Devolucion.lista','uses'=>'devolucionController@lista']);
Route::get('detallePed/{Id}',['as'=>'Devolucion.detalle','uses'=>'devolucionController@detalle']);
Route::get('create/{Id}',['as'=>'Devolucion.creates','uses'=>'devolucionController@create']);

//CHOFER
Route::resource('Chofer', 'choferController');
//VEHICULO
Route::resource('Vehiculo', 'vehiculoController');

//ENTREGA PEDIDO
Route::resource('EntregaPedido', 'entregapedidoController');
//DETALLE ENTREGAPEDIDO
Route::get('DetalleEntregaPedido/{Id}',['as'=>'DetalleEntregaPedido.index','uses'=>'detalleentregapedidoController@index']);
Route::post('DetalleEntregaPedido/{Pedido}/{Entrega}',['as'=>'DetalleEntregaPedido.crear','uses'=>'detalleentregapedidoController@crear']);

//LOGIN
Route::get('login',['as'=>'login','uses'=>'Auth\LoginController@showLoginForm']);
Route::post('login','Auth\LoginController@login');
Route::get('logout','Auth\LoginController@logout');





Route::resource('usuarios','UsersController');

Route::get('Bitacora/{tipo}',['as'=>'Bitacora.Bitacora','uses'=>'bitacoraController@Bitacora']);

Route::get('ReporteNotaventa',['as'=>'Reporte.notas','uses'=>'reporteController@ReporteVenta']);
Route::get('ReportePedido',['as'=>'Reporte.pedidos','uses'=>'reporteController@ReportePedido']);
Route::get('ReporteNotacompra',['as'=>'Reporte.compras','uses'=>'reporteController@ReporteCompra']);


