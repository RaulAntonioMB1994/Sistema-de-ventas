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



Route::group(['middleware' => ['web']], function () {

    //Muestra las categorias
Route::get('categories','CategoryController@index')->name('categories.index');
//
// Crear una categoria
Route::get('categories/create','CategoryController@create')->name('categories.create');
Route::post('categories','CategoryController@store')->name('categories.store');
//
//Edita una categoria
Route::get('categories/{category}/edit','CategoryController@edit')->name('categories.edit')->where('category','[0-9]+');
Route::put('categories/{category}','CategoryController@update ')->name('categories.update')->where('category','[0-9]+');
//
// Eliminar una categoria
Route::get('categories/{id}/destroy',[ 'uses' => 'CategoryController@destroy','as' => 'categories.destroy'])->where('category','[0-9]+');
//
});






// Route::get('/products/index', 'ProductController@index')->name('index');
