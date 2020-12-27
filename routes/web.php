<?php

use Illuminate\Support\Facades\Route;

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
    return view('client.index');
})->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/productos', 'ClientController@show')->name('productos');
Route::get('/nosotros', function () {
    return view('client.nosotros');
})->name('nosotros');
Route::get('/contacto', function () {
    return view('client.contacto');
})->name('contacto');

//Ruta para el controlador del administrador
Route::resource('products', 'ProductController');
Route::get('/admindproductos', 'AdminController@show')->name('adminproductos');

//Rutas para los usuarios
Route::resource('users', 'UserController');