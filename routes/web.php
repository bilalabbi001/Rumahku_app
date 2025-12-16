<?php

use App\Http\Controllers\backend\AceController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\AlunaController;
use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\BreezeController;
use App\Http\Controllers\backend\PutanutuController;
use App\Http\Controllers\frontend\homeController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/produk', [homeController::class, 'produk'])->name('produk');
Route::get('/aluna', [homeController::class, 'aluna'])->name('aluna');
Route::get('/putanutu', [homeController::class, 'putanutu'])->name('putanutu');
// Route::get('/ace', [homeController::class, 'ace'])->name('ace');
// Route::get('/breeze', [homeController::class, 'breeze'])->name('breeze');
Route::get('/kanaka', [homeController::class, 'kanaka'])->name('kanaka');
Route::get('/kontak', [homeController::class, 'kontak'])->name('kontak');
Route::get('/tentang-kami', [homeController::class, 'tentangKami'])->name('tentangkami');

// Route Detail
Route::get('/aluna/{slug}', [AlunaController::class, 'show'])->name('aluna.show');
Route::get('/putanutu/{slug}', [PutanutuController::class, 'show'])->name('putanutu.show');
// Route::get('/breeze/{slug}', [BreezeController::class, 'show'])->name('breeze.show');
// Route::get('/ace/{slug}', [AceController::class, 'show'])->name('ace.show');


// Route Login
Route::middleware('login')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login');
});


// Route logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Route Admin
Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('aluna', AlunaController::class);
    Route::resource('putanutu', PutanutuController::class);
    // Route::resource('breeze', BreezeController::class);
    // Route::resource('ace', AceController::class);
});
