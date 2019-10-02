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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});
Route::get('actividad', function () {
    return view('actividad');
});
Route::get('categoria', function () {
    return view('categoria');
});
Route::get('index', function () {
    return view('index');
});
=======
Route::get('/','homeController@show');
>>>>>>> 726661568c3196238b00f43d556e31c468457099
