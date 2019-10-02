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

Route::get('/','homeController@show');

<<<<<<< HEAD
Route::get('search','homeController@filtrar')->name('search');
=======
Route::get('actividad', function () {
    return view('actividad');
});
Route::get('categoria', function () {
    return view('categoria');
});
Route::get('index', function () {
    return view('index');
});
>>>>>>> 35cc1877e2082937535fb495ae6252f4798b467d
