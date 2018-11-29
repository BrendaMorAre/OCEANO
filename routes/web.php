<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now crear something great!
|
*/

Auth::routes();


Route::get('clients', 'ClientesController@index');

Route::get('/', 'MenuController@index');

Route::get('usuarios', 'MenuController@usuarios');

Route::get('empleados', 'EmpleadosController@index');

Route::get('proveedores', 'ProveedoresController@index');

Route::get('catproductos', 'ProductosController@catProductos');

Route::get('productos', 'MarcaController@marcaProductos');

Route::get('nuevaCotizacion', 'MenuController@nuevaCotizacion');

Route::get('pdf', 'ReciboController@invoice');


Route::get('servicios', 'ServiciosController@index');

//Route::get('nuevaCotizacion', 'MenuController@nuevaCotizacion');

Route::get('clientes/getdata', 'ClientesController@getdata');

Route::post('/nuevo/cliente','ClientesController@store');

Route::get('/clientes/pdf','ClientesController@generar_pdf');

/*Route::get('myform', 'ClientesController@index');

Route::get('myform/getdata', 'ClientesController@getdata');*/

Route::post('import_tarifas','PruebaController@import_tarifas');

Route::get('importar', 'PruebaController@index');



