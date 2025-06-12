<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AfrikaController;
use App\Http\Controllers\AktivitasController;
use App\Http\Controllers\AmerikaController;
use App\Http\Controllers\AustraliaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EropaController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\KotaAsiaController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\NegaraController;
use App\Http\Controllers\TrapelController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CekLogin;
use App\Http\Controllers\AsiaController;
use Illuminate\Support\Facades\Route;

Route::get('/asia', [AsiaController::class, 'index'])->name('asia.list');
Route::get('/eropa', [EropaController::class, 'index'])->name('eropa.list');
Route::get('/australia', [AustraliaController::class, 'index'])->name('australia.list');
Route::get('/amerika', [AmerikaController::class, 'index'])->name('amerika.list');
Route::get('/afrika', [AfrikaController::class, 'index'])->name('afrika.list');

Route::get('/trapel', [TrapelController::class, 'trapel'])->name('trapel.list');

Route::get('/asia/detail/{id}', [AsiaController::class, 'detail'])->name('asia.detail');
Route::match(['get', 'post'], '/asia/create', [AsiaController::class, 'create'])->name('asia.create');
Route::match(['get', 'post'], '/asia/delete/{id}', [AsiaController::class, 'delete'])->name('asia.delete');
Route::match(['get', 'post'], '/asia/edit/{id}', [AsiaController::class, 'edit'])->name('asia.edit');

Route::get('/eropa/detail/{id}', [EropaController::class, 'detail'])->name('eropa.detail');
Route::match(['get', 'post'], '/eropa/create', [EropaController::class, 'create'])->name('eropa.create');
Route::match(['get', 'post'], '/eropa/delete/{id}', [EropaController::class, 'delete'])->name('eropa.delete');
Route::match(['get', 'post'], '/eropa/edit/{id}', [EropaController::class, 'edit'])->name('eropa.edit');

Route::get('/australia/detail/{id}', [AustraliaController::class, 'detail'])->name('australia.detail');
Route::match(['get', 'post'], '/australia/create', [AustraliaController::class, 'create'])->name('australia.create');
Route::match(['get', 'post'], '/australia/delete/{id}', [AustraliaController::class, 'delete'])->name('australia.delete');
Route::match(['get', 'post'], '/australia/edit/{id}', [AustraliaController::class, 'edit'])->name('australia.edit');

Route::get('/amerika/detail/{id}', [AmerikaController::class, 'detail'])->name('amerika.detail');
Route::match(['get', 'post'], '/amerika/create', [AmerikaController::class, 'create'])->name('amerika.create');
Route::match(['get', 'post'], '/amerika/delete/{id}', [AmerikaController::class, 'delete'])->name('amerika.delete');
Route::match(['get', 'post'], '/amerika/edit/{id}', [AmerikaController::class, 'edit'])->name('amerika.edit');

Route::get('/afrika/detail/{id}', [AfrikaController::class, 'detail'])->name('afrika.detail');
Route::match(['get', 'post'], '/afrika/create', [AfrikaController::class, 'create'])->name('afrika.create');
Route::match(['get', 'post'], '/afrika/delete/{id}', [AfrikaController::class, 'delete'])->name('afrika.delete');
Route::match(['get', 'post'], '/afrika/edit/{id}', [AfrikaController::class, 'edit'])->name('afrika.edit');

Route::get('/kotaasia', [KotaAsiaController::class, 'index'])->name('kotaasia.list');

Route::get('/kota-asia/detail/{id}', [KotaAsiaController::class, 'detail'])->name('kotaasia.detail');
Route::match(['get', 'post'], '/kota-asia/create', [KotaAsiaController::class, 'create'])->name('kotaasia.create');
Route::match(['get', 'post'], '/kota-asia/delete/{id}', [KotaAsiaController::class, 'delete'])->name('kotaasia.delete');
Route::match(['get', 'post'], '/kota-asia/edit/{id}', [KotaAsiaController::class, 'edit'])->name('kotaasia.edit');

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login", [AuthController::class, 'login'])->name('login');
Route::post("/login", [AuthController::class, 'do_login']);
Route::get("/register", [AuthController::class, 'register']);
Route::post("/register", [AuthController::class, 'do_register']);
Route::get("/logout", [AuthController::class, 'logout']);

/*
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
*/