<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Niha', function() {
    echo "Niha Cantik";
});

Route::get('/data_guru', function () {
    return view('data_guru');
});

Route::get('/data_siswa', function () {
    return view('data_siswa');
});

//route resource
// Route::resource('/products', \App\Http\Controllers\ProductController::class);
// Route::get('/tampil', [ProductController::class, 'tampil']);

Route::get('/home', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog/index');
});

// Route::get('tampil/search',[ProductController::class, 'search']);

Route::get('/manfaatbuah', function () {
    return view('manfaatbuah');
});
Route::get('/tipsberkebun', function () {
    return view('tipsberkebun');
});

Route::get('/tanamanhias', function () {
    return view('tanamanhias');
});

//route contact
Route::resource('/contact', \App\Http\Controllers\ContactController::class);
Route::get('/tampil', [ContactController::class, 'tampil']);

Route::get('/tanamanobat', function () {
    return view('tanamanobat');
});

//register dan login
Route::group(['middleware' => 'guest'], function(){
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register.store');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login.store');
});

Route::group(['middleware' => 'guest'], function(){
    Route::get('/home', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});