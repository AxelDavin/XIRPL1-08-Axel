<?php
use App\Http\Controllers\ContactController;
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
    return view ('index', [
        "title" => "Beranda"
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title" => "About",
        "nama" => "Axel Davin Lazar Panenggak",
        "email" => "axeldavin2005@gmail.com",
        "gambar" => "fotoaxel.jpg"
    ]);
});

Route::get('/gallery', function () {
    return view ('gallery', [
        "title" => "Gallery"
    ]);
});

Route::resource('/contacts', ContactController::class);

Auth::routes();

Route::group(['middleware' => ['auth']], function (){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
