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
    return view('menu');
});
Route::get('/dasboard', function () {
    return view('dasboard');
});
Route::get('/shopp', function () {
    return view('shopping');
});
Route::get('/profil', function () {
    return view('profil');
});