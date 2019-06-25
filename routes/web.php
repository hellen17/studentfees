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
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/fees', function () {
    return view('fees');
})->name('fees');

Route::post('/register','RegisterController@register');
Route::post('/fees','FeesController@fees');
Route::get('viewfees','RegisterController@viewStudentstotalfees')->name("viewfees");
Route::get('search', 'FeesController@search')->name('search');
