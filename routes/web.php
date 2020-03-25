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
Route::get('/', function () {
    return view('login.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/inicio', 'InicioController@index')->name('inicio');


Route::get('/lista_categorias', 'Admin\CategoriaController@show')->name('lista_categorias');
Route::get('/nueva_categoria', 'Admin\CategoriaController@index')->name('nueva_categoria');
Route::post('categoria', 'Admin\CategoriaController@store');
Route::post('categoria_update', 'Admin\CategoriaController@update')->name('categoria_update');
Route::post('categoria_delete', 'Admin\CategoriaController@delete')->name('categoria_delete');



Route::get('/lista_marcas', 'Admin\MarcaController@show')->name('lista_marcas');
Route::get('/nueva_marca', 'Admin\MarcaController@new')->name('nueva_marca');
Route::post('marca', 'Admin\MarcaController@store');
Route::post('marca_update', 'Admin\marcaController@update')->name('marca_update');
Route::post('marca_delete', 'Admin\marcaController@delete')->name('marca_delete');


Route::get('lista_proveedores', 'Admin\ProveedorController@show')->name('lista_proveedores');
Route::get('nuevo_proveedor', 'Admin\ProveedorController@new')->name('nuevo_proveedor');
Route::post('proveedor', 'Admin\ProveedorController@store');


Route::get('/lista_productos', 'Admin\productoController@show')->name('lista_productos');
Route::get('/nuevo_producto', 'Admin\productoController@new')->name('nuevo_producto');
Route::post('/producto', 'Admin\productoController@store')->name('producto');
// Auth::routes();
