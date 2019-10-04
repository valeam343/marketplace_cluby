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


Route::get('search','homeController@filtrar')->name('search');
Route::get('searchs','homeController@filtrar2')->name('searchs');
Route::get('actividad/{nombre}','actividadController@show');
Route::get('categoria', function () {
    return view('categoria');
});

Route::get('index', function () {
    return view('index');
});
