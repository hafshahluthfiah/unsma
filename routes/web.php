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
    return view('coba');
});

Route::get('/home', function () {
    return view('coba');
});

Route::get('/mapel', function () {
    return view('register');
});

Route::get('/TO', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('masuk');
});

Auth::routes();
