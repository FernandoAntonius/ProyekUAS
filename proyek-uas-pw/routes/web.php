<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AktivitasController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EropaController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\NegaraController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CekLogin;
use App\Http\Controllers\AsiaController;
use Illuminate\Support\Facades\Route;

Route::get('/asia', [AsiaController::class, 'index'])->name('asia.list');
Route::get('/eropa', [EropaController::class, 'index'])->name('eropa.list');
Route::get('/trapel', [NegaraController::class, 'negara'])->name('trapel.list');
Route::get('/asia/detail/{id}', [AsiaController::class, 'detail'])->name('asia.detail');
Route::match(['get', 'post'], '/asia/create', [AsiaController::class, 'create'])->name('asia.create');
Route::match(['get', 'post'], '/asia/delete/{id}', [AsiaController::class, 'delete'])->name('asia.delete');
Route::match(['get', 'post'], '/asia/edit/{id}', [AsiaController::class, 'edit'])->name('asia.edit');
Route::get('/eropa/detail/{id}', [EropaController::class, 'detail'])->name('eropa.detail');
Route::match(['get', 'post'], '/eropa/create', [EropaController::class, 'create'])->name('eropa.create');
Route::match(['get', 'post'], '/eropa/delete/{id}', [EropaController::class, 'delete'])->name('eropa.delete');
Route::match(['get', 'post'], '/eropa/edit/{id}', [EropaController::class, 'edit'])->name('eropa.edit');

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::middleware([CekLogin::class . ':admin'])->group(function () {
        Route::resource('hotel', HotelController::class);
        Route::resource('kota', KotaController::class);
        Route::resource('aktivitas', AktivitasController::class);
    });
});

Route::prefix('user')->group(function () {
    Route::middleware([CekLogin::class . ':user'])->group(function () {
        Route::resource('hotel', HotelController::class);
        Route::resource('kota', KotaController::class);
        Route::resource('aktivitas', AktivitasController::class);
    });
});
