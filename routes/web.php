<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ButirsController;
use App\Http\Controllers\JenjangsController;
use App\Http\Controllers\Kategori1sController;
use App\Http\Controllers\Kategori2sController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashbordButirsController;
use PhpParser\Builder\Function_;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about"
    ]);
});

Route::get('/giat', function () {
    return view('giat', [
        "title" => "Kegiatan",
        "active" => "kegiatan"
    ]);
});

//Jenjang
Route::get('/jenjangs', [JenjangsController::class, 'index']);
//halaman single jenjang
Route::get('/jenjangs/{jenjang:jen_slug}', [JenjangsController::class, 'show']);

//Kategori
Route::get('/kategori1s', [Kategori1sController::class, 'index']);
//halaman single jenjang
Route::get('/kategori1s/{kategori:kat01_slug}', [Kategori1sController::class, 'show']);

//Kategori2
Route::get('/kategori2s', [Kategori2sController::class, 'index']);
//halaman single jenjang
Route::get('/kategori2s/{kategori:kat02_slug}', [Kategori2sController::class, 'show']);

//Butir
Route::get('/butirs', [ButirsController::class, 'index']);
//halaman single butir
Route::get('/butir/{butir:but_slug}', [ButirsController::class, 'show']);

// halaman login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// halaman register 
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// halaman dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/butirs/checkSlug', [DashbordButirsController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/butirs', DashbordButirsController::class)->middleware('auth');
