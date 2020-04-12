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
// Route::get('/', function () {
//     return view('login.login');
// });
Route::get('/', 'User\usuarioController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/inicio', 'InicioController@index')->name('inicio');

// ========================= Categoria ===================================
Route::get('/lista_categorias', 'Admin\CategoriaController@show')->name('lista_categorias');
Route::get('/nueva_categoria', 'Admin\CategoriaController@index')->name('nueva_categoria');
Route::post('categoria', 'Admin\CategoriaController@store');
Route::post('categoria_update', 'Admin\CategoriaController@update')->name('categoria_update');
Route::post('categoria_delete', 'Admin\CategoriaController@delete')->name('categoria_delete');
// =======================================================================


// ========================= Marcas  ===================================
Route::get('/lista_marcas', 'Admin\MarcaController@show')->name('lista_marcas');
Route::get('/nueva_marca', 'Admin\MarcaController@new')->name('nueva_marca');
Route::post('marca', 'Admin\MarcaController@store');
Route::post('marca_update', 'Admin\marcaController@update')->name('marca_update');
Route::post('marca_delete', 'Admin\marcaController@delete')->name('marca_delete');
// =======================================================================


// ========================= Proveedores ===================================
Route::get('lista_proveedores', 'Admin\ProveedorController@show')->name('lista_proveedores');
Route::get('nuevo_proveedor', 'Admin\ProveedorController@new')->name('nuevo_proveedor');
Route::post('proveedor', 'Admin\ProveedorController@store');
Route::post('proveedor_update', 'Admin\ProveedorController@update')->name('proveedor_update');
Route::post('proveedor_delete', 'Admin\ProveedorController@delete')->name('proveedor_delete');
// =======================================================================


// ========================= Productos ===================================
Route::get('/lista_productos', 'Admin\productoController@show')->name('lista_productos');
Route::get('/nuevo_producto', 'Admin\productoController@new')->name('nuevo_producto');
Route::post('/producto', 'Admin\productoController@store')->name('producto');
Route::get('gf', 'Admin\productoController@gf')->name('gf');
Route::post('producto_update', 'Admin\productoController@update')->name('producto_update');
Route::post('producto_delete', 'Admin\productoController@delete')->name('producto_delete');
// =======================================================================


// ========================= Modelos ===================================
Route::get('lista_modelos', 'Admin\modeloController@show')->name('lista_modelos');
Route::get('nuevo_modelo', 'Admin\modeloController@new')->name('nuevo_modelo');
Route::post('modelo', 'Admin\modeloController@store')->name('modelo');
Route::post('modelo_update', 'Admin\modeloController@update')->name('modelo_update');
Route::post('modelo_delete', 'Admin\modeloController@delete')->name('modelo_delete');

// =======================================================================




// Auth::routes();



Route::get('/lr', function(){
return view('Auth.login');
})->name('l');


Route::get('/r', function(){
    return view('login.registro');

})->name('registro');

Route::get('/cargarimg', function(){
    return view('Admin.formi');

});
Route::get('/dropzone', function(){
    return view('Admin.drop');

});


Route::get('/rp', function(){
    return view('Admin.Form.registro_categoria');
    });


// ============================= rutas usuarios ====================================

Route::get('/inicio_user', 'User\usuarioController@index')->name('inicio_user');
Route::get('/buscar', 'User\usuarioController@search')->name('buscar');
Route::get('/iu', function(){
    return view ('User.home');
    });
Route::get('/ver_productos', function(){
    return view ('User.producto');
    });
Route::get('/pre', function(){
    return view ('Admin.Form.productos');
    });

Route::get('/cuenta/carro', 'User\cuentaUserController@carroCompras')->name('carro');


