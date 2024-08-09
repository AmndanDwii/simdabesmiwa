<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KepulanganController;
use App\Http\Controllers\InputKepulanganController;


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


// Route::get('/', function () {
//     return view('warga.dashboard');
// })->middleware('auth');


// login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// dashboard warga
Route::get('/', function () {
    return view('warga.dashboard');
})->middleware('auth');


//dashboard admin
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth');

// kepulangan route
Route::get('/datakepulangan', [KepulanganController::class, 'index'])->middleware('auth');

Route::get('/inputkepulangan', [InputKepulanganController::class, 'index'])->middleware('auth');

// Route untuk menampilkan form input kepulangan
Route::get('/inputkepulangan/create', [InputKepulanganController::class, 'create'])->name('kepulangan.create')->middleware('auth');

// Route untuk menyimpan data kepulangan yang baru
Route::post('/inputkepulangan', [InputKepulanganController::class, 'store'])->name('kepulangan.store')->middleware('auth');

// Rute untuk menampilkan dan mengupdate profil
Route::match(['get', 'post'], '/profile', [ProfileController::class, 'edit'])->middleware('auth')->name('profile');


Route::post('/kepulangan/store', [InputKepulanganController::class, 'store'])->name('kepulangan.store');