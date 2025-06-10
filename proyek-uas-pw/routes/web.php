<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AktivitasController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\NegaraController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CekLogin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/trapel', function () {
    return view('layout.master');
});

Route::get("/login", [AuthController::class, 'login'])->name('login');
Route::post("/login", [AuthController::class, 'do_login']);
Route::get("/register", [AuthController::class, 'register']);
Route::post("/register", [AuthController::class, 'do_register']);
Route::get("/logout", [AuthController::class, 'logout']);

Route::group(['middleware' => ['auth']], function(){
    Route::get("/admin", [AdminController::class, 'index'])->middleware(CekLogin::class.':admin');
    Route::get("/user", [UserController::class, 'index'])->middleware(CekLogin::class.':user');

    Route::prefix('admin')->group(function (){
        Route::resource('hotel', HotelController::class);
        Route::resource('kota', KotaController::class);
        Route::resource('negara', NegaraController::class);
        Route::resource('aktivitas', AktivitasController::class);
    })->middleware([CekLogin::class.':admin', 'prefix' => 'admin']);

     Route::prefix('user')->group(function (){
        Route::resource('hotel', HotelController::class);
        Route::resource('kota', KotaController::class);
        Route::resource('negara', NegaraController::class);
        Route::resource('aktivitas', AktivitasController::class);
    })->middleware([CekLogin::class.':user']);
});