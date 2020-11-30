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


Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/create',"ProductsController@create" ) -> name("addproduct");

Route::post('/home/store' , "ProductsController@store") -> name("productsstore");
Route::post("/home/delete", "ProductsController@delete") -> name("productdelete");
Route::post("/home/update","ProductsController@update")->name("productupdate");
Route::get("/home/edit{id}","ProductsController@edit")->name("productedit");

