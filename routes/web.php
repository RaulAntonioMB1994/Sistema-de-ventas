<?php

Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();


//:::::::::::::::://
// Ruta dashboard //
//:::::::::::::::://
Route::get('dashboard', 'DashboardController@index')->name('index');
////////////////////// 
//////////////////////


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
//  Ruta empresa  //
//:::::::::::::::://
// Muestra los datos de la empresa
Route::get('business','BusinessController@index')->name('business.index');
//Edita la empresa
Route::get('business/{business}/edit','BusinessController@edit')->name('business.edit');
Route::put('business/{business}','BusinessController@update')->name('business.update');
////////////////////  
////////////////////


//:::::::::::::::://
// Ruta tienda    //
//:::::::::::::::://
//Muestra las tiendas
Route::get('shops','ShopController@index')->name('shops.index');
// Crear una categoria
Route::get('shops/create','ShopController@create')->name('shops.create');
Route::post('shops','ShopController@store')->name('shops.store');
//Edita una categoria
Route::get('shops/{shop}/edit','ShopController@edit')->name('shops.edit')->where('shop','[0-9]+');
Route::put('shops/{shop}','ShopController@update')->name('shops.update')->where('shop','[0-9]+');
// Eliminar una categoria
Route::get('shops/{shop}/destroy',[ 'uses' => 'ShopController@destroy','as' => 'shops.destroy'])->where('shop','[0-9]+');
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


Route::get('products/pdf','ProductController@exportPdf')->name('products.pdf');

////////////////////// 
//////////////////////



//:::::::::::::::://
// Ruta ventas    //
//:::::::::::::::://
//Muestra las ventas
Route::get('sales','SaleController@index')->name('sales.index');
// Almacena los productos en un carrito de compras
Route::get('sales/shopping_carts/{sale}',[ 'uses' => 'SaleController@shopping_carts','as' => 'sales.shopping_carts'])->where('sale','[0-9]+');


Route::get('sales/{sales}','SaleController@show')->name('sales.show');

Route::put('sales/{sales}','SaleController@update')->name('sales.update')->where('sales','[0-9]+');


//:::::::::::::::::::://
// Ruta detalle venta //
//:::::::::::::::::::://

//Muestra las ventas
Route::get('sales_details','SaleDetailController@index')->name('sales_details.index');

Route::post('sales_details','SaleDetailController@store')->name('sales_details.store');

