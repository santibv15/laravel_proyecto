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
    return view('welcome');
});

#region para el proveedor
Route::get('Proveedor/delete/{id}','ProveedorController@DeletePro')->name('DeleteProveedor');

Route::get('Proveedor/update/{id}', 'ProveedorController@UpdatePro')->name('UpdateProveedor');

Route::get('Proveedor/insert', function (){
    return view('Proveedor/insert');
}) -> name('insertpro');

Route::post('Proveedor/insert', 'ProveedorController@InsertPro')->name('InsertProveedor');

Route::get ('Proveedor/view', 'ProveedorController@ViewPro')->name('ViewProveedor');

Route::post('Proveedor/update', 'ProveedorController@UpdateBdPro') ->name('UpdateBdProveedor');
#endregion

#region
Route::get('Producto/insert', 'ProductoController@ViewInsertProd')->name('ViewInsertProducto');

Route::post('Poducto/insert', 'ProductoController@InsertProd')->name('InsertProducto');