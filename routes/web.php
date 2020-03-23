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


Route::get('/lista_categorias', 'listas\CategoriaController@show')->name('lista_categorias');
Route::get('/nueva_categoria', 'listas\CategoriaController@index')->name('nueva_categoria');
Route::post('categoria', 'listas\CategoriaController@store');


Route::get('/lista_marcas', 'Admin\MarcaController@show')->name('lista_marcas');
Route::get('/nueva_marca', 'Admin\MarcaController@new')->name('nueva_marca');
Route::post('marca', 'Admin\MarcaController@store');


Route::get('lista_proveedores', 'Admin\ProveedorController@show')->name('lista_proveedores');
Route::get('nuevo_proveedor', 'Admin\ProveedorController@new')->name('nuevo_proveedor');
Route::post('proveedor', 'Admin\ProveedorController@store');


Route::get('/lista_productos', 'Admin\productoController@index')->name('lista_productos');
Route::get('/nuevo_producto', 'Admin\productoController@index')->name('nuevo_producto');
// Auth::routes();

Route::get('/l', function(){
return view('login.login');
});

Route::get('/r', function(){
    return view('login.registro');

})->name('registro');

Route::get('/rp', function(){
    return view('Admin.Form.registro_categoria');
    });
