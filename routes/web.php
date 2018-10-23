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
Route::get('/lo', function () {
    return view('l');
});
Route::get('/', function () {
    return view('welcome');
});



Auth::routes();
Route::get('activate/{token}', 'Auth\RegisterController@activate')
    ->name('activate');



Route::get('/home', 'HomeController@index');

Route::post('/test', 'ReController@create');
Route::get('/admin', 'AdminController@index');

Route::get('/ca', function () {
    return view('casa');
});







Route::resource('profesor','ProfesorController');



