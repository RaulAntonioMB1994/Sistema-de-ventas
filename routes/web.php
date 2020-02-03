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
    return view('auth.login');
});
Auth::routes();
Route::get('dashboard', 'DashboardController@index')->name('index');


//:::::::::::::::://
// Ruta categoria //
//:::::::::::::::://
//Muestra las categorias
Route::get('categories','CategoryController@index')->name('categories.index');
// Crear una categoria
Route::get('categories/create','CategoryController@create')->name('categories.create');
Route::post('categories','CategoryController@store')->name('categories.store');
//Edita una categoria
Route::get('categories/{category}/edit','CategoryController@edit')->name('categories.edit')->where('category','[0-9]+');
Route::put('categories/{category}','CategoryController@update')->name('categories.update')->where('category','[0-9]+');
// Eliminar una categoria
Route::get('categories/{id}/destroy',[ 'uses' => 'CategoryController@destroy','as' => 'categories.destroy'])->where('category','[0-9]+');
////////////////////// 
//////////////////////


//:::::::::::::::://
// Ruta producto  //
//:::::::::::::::://
//Muestra los producto
Route::get('products','ProductController@index')->name('products.index');
// Crear un producto
Route::get('products/create','ProductController@create')->name('products.create');
Route::post('products','ProductController@store')->name('products.store');
// Muestra un producto
Route::get('product/{product}','ProductController@show')->name('products.show');
//Edita un producto
Route::get('products/{product}/edit','ProductController@edit')->name('products.edit')->where('product','[0-9]+');
Route::put('products/{product}','ProductController@update')->name('products.update')->where('product','[0-9]+');
// Eliminar un producto
Route::get('products/{product}/destroy',[ 'uses' => 'ProductController@destroy','as' => 'products.destroy'])->where('product','[0-9]+');
//Ruta para el archivo
Route::get('products/images/{filename}', function ($filename) {
    $path = storage_path("app/images/products/$filename");
    if(!\File::exists($path)) abort(404);
    $file = \File::get($path);
    $type = \File::mimeType($path);
    $response = Response::make($file,200);
    $response->header("Content-Type",$type);
    return $response;
});
////////////////////// 
//////////////////////



//:::::::::::::::://
// Ruta ventas    //
//:::::::::::::::://
//Muestra las ventas
Route::get('sales','SaleController@index')->name('sales.index');
// Crear una venta
Route::get('sales/create','SaleController@create')->name('sales.create');
Route::post('sales','SaleController@store')->name('sales.store');
//Edita una venta
Route::get('sales/{sale}/edit','SaleController@edit')->name('sales.edit')->where('sale','[0-9]+');
Route::put('sales/{sale}','SaleController@update')->name('sales.update')->where('sale','[0-9]+');
// Eliminar una venta
Route::get('sales/{sale}/destroy',[ 'uses' => 'SaleController@destroy','as' => 'sales.destroy'])->where('sale','[0-9]+');
////////////////////// 
//////////////////////


//:::::::::::::::::::://
// Ruta detalle venta //
//:::::::::::::::::::://

//Muestra las ventas
Route::get('sales_details','SaleDetailController@index')->name('sales_details.index');