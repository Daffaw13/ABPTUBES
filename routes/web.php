<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
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
    return view('Landing');
});

//Login
Route::get('/Login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/Login', [LoginController::class, 'authenticate']);
//End Login

//Logout
Route::post('/Logout', [LoginController::class, 'Logout']);
//End Logout

//Register
Route::get('/Register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/Register', [RegisterController::class, 'store']);
// End Register

Route::get('/About', function () {
    return view('About');
});

Route::get('/Wisata', function () {
    return view('Wisata');
});


Route::get('/Login', function () {
    return view('Login');
});

Route::get('/Register', function () {
    return view('Register');
});

Route::get('/Home', function () {
    return view('Home');
});

Route::get('/History', function () {
    return view('History');
});

Route::get('/dummy', function () {
    return view('dummy');
});

Route::get('/Keraton', function () {
    return view('Keraton');
});

Route::get('/Kereta', function () {
    return view('Kereta');
});

Route::get('/Puro', function () {
    return view('Puro');
});

Route::get('/Perjuangan', function () {
    return view('Perjuangan');
});

route::post('Order', 'OrderController@store')->name('Order.store');

route::get('Order', 'OrderController@index')->name('Order.index');

route::delete('Order', 'OrderController@destroy')->name('Order.destroy');

route::get('update', 'OrderController@update')->name('Order.update');










