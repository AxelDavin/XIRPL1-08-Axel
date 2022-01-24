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
    return view('welcome');
});

Route::get('/home', function () {
    return view ('home');
});

Route::get('/about', function () {
    return view ('about', [
        "nama" => "Axel Davin Lazar Panenggak",
        "email" => "axeldavin2005@gmail.com",
        "gambar" => "fotoaxel.jpg"
    ]);
});

Route::get('/gallery', function () {
    return view ('gallery');
});
