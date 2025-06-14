<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AfrikaController;
use App\Http\Controllers\AktivitasController;
use App\Http\Controllers\AmerikaController;
use App\Http\Controllers\AsiaController;
use App\Http\Controllers\AustraliaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\EropaController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\KotaAfrikaController;
use App\Http\Controllers\KotaAmerikaController;
use App\Http\Controllers\KotaAsiaController;
use App\Http\Controllers\KotaAustraliaController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\KotaEropaController;
use App\Http\Controllers\NegaraController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\TrapelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/trapel', [TrapelController::class, 'trapel'])->name('trapel.list');
Route::get('/trapel/negara', [NegaraController::class, 'negara'])->name('negara.list');
Route::get('/trapel/kota', [KotaController::class, 'kota'])->name('kota.list');

Route::get('/support', [BantuanController::class, 'index']);
Route::get('/about-us', [TentangController::class, 'index']);

Route::get('/asia', [AsiaController::class, 'index'])->name('asia.list');
Route::get('/asia/detail/{id}', [AsiaController::class, 'detail'])->name('asia.detail');
Route::match(['get', 'post'], '/asia/create', [AsiaController::class, 'create'])->name('asia.create')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');
Route::match(['get', 'post'], '/asia/delete/{id}', [AsiaController::class, 'delete'])->name('asia.delete')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');
Route::match(['get', 'post'], '/asia/edit/{id}', [AsiaController::class, 'edit'])->name('asia.edit')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');

Route::get('/eropa', [EropaController::class, 'index'])->name('eropa.list');
Route::get('/eropa/detail/{id}', [EropaController::class, 'detail'])->name('eropa.detail');
Route::match(['get', 'post'], '/eropa/create', [EropaController::class, 'create'])->name('eropa.create')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');
Route::match(['get', 'post'], '/eropa/delete/{id}', [EropaController::class, 'delete'])->name('eropa.delete')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');
Route::match(['get', 'post'], '/eropa/edit/{id}', [EropaController::class, 'edit'])->name('eropa.edit')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');

Route::get('/amerika', [AmerikaController::class, 'index'])->name('amerika.list');
Route::get('/amerika/detail/{id}', [AmerikaController::class, 'detail'])->name('amerika.detail');
Route::match(['get', 'post'], '/amerika/create', [AmerikaController::class, 'create'])->name('amerika.create')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');
Route::match(['get', 'post'], '/amerika/delete/{id}', [AmerikaController::class, 'delete'])->name('amerika.delete')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');
Route::match(['get', 'post'], '/amerika/edit/{id}', [AmerikaController::class, 'edit'])->name('amerika.edit')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');

Route::get('/australia', [AustraliaController::class, 'index'])->name('australia.list');
Route::get('/australia/detail/{id}', [AustraliaController::class, 'detail'])->name('australia.detail');
Route::match(['get', 'post'], '/australia/create', [AustraliaController::class, 'create'])->name('australia.create')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');
Route::match(['get', 'post'], '/australia/delete/{id}', [AustraliaController::class, 'delete'])->name('australia.delete')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');
Route::match(['get', 'post'], '/australia/edit/{id}', [AustraliaController::class, 'edit'])->name('australia.edit')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');

Route::get('/afrika', [AfrikaController::class, 'index'])->name('afrika.list');
Route::get('/afrika/detail/{id}', [AfrikaController::class, 'detail'])->name('afrika.detail');
Route::match(['get', 'post'], '/afrika/create', [AfrikaController::class, 'create'])->name('afrika.create')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');
Route::match(['get', 'post'], '/afrika/delete/{id}', [AfrikaController::class, 'delete'])->name('afrika.delete')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');
Route::match(['get', 'post'], '/afrika/edit/{id}', [AfrikaController::class, 'edit'])->name('afrika.edit')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');

Route::get('/kotaasia', [KotaAsiaController::class, 'index'])->name('kotaasia.list');
Route::get('/kota-asia/detail/{id}', [KotaAsiaController::class, 'detail'])->name('kotaasia.detail');
Route::match(['get', 'post'], '/kota-asia/create', [KotaAsiaController::class, 'create'])->name('kotaasia.create')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');
Route::match(['get', 'post'], '/kota-asia/delete/{id}', [KotaAsiaController::class, 'delete'])->name('kotaasia.delete')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');
Route::match(['get', 'post'], '/kota-asia/edit/{id}', [KotaAsiaController::class, 'edit'])->name('kotaasia.edit')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');

Route::get('/kotaeropa', [KotaAsiaController::class, 'index'])->name('kotaeropa.list');
Route::get('/kota-eropa/detail/{id}', [KotaEropaController::class, 'detail'])->name('kotaeropa.detail');
Route::match(['get', 'post'], '/kota-eropa/create', [KotaEropaController::class, 'create'])->name('kotaeropa.create')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');
Route::match(['get', 'post'], '/kota-eropa/delete/{id}', [KotaEropaController::class, 'delete'])->name('kotaeropa.delete')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');
Route::match(['get', 'post'], '/kota-eropa/edit/{id}', [KotaEropaController::class, 'edit'])->name('kotaeropa.edit')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');

Route::get('/kota-amerika', [KotaAmerikaController::class, 'index'])->name('kotaamerika.list');
Route::get('/kota-amerika/detail/{id}', [KotaAmerikaController::class, 'detail'])->name('kotaamerika.detail');
Route::match(['get', 'post'], '/kota-amerika/create', [KotaAmerikaController::class, 'create'])->name('kotaamerika.create')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');
Route::match(['get', 'post'], '/kota-amerika/delete/{id}', [KotaAmerikaController::class, 'delete'])->name('kotaamerika.delete')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');
Route::match(['get', 'post'], '/kota-amerika/edit/{id}', [KotaAmerikaController::class, 'edit'])->name('kotaamerika.edit')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');

Route::get('/kota-australia', [KotaAustraliaController::class, 'index'])->name('kotaaustralia.list');
Route::get('/kota-australia/detail/{id}', [KotaAustraliaController::class, 'detail'])->name('kotaaustralia.detail');
Route::match(['get', 'post'], '/kota-australia/create', [KotaAustraliaController::class, 'create'])->name('kotaaustralia.create')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');
Route::match(['get', 'post'], '/kota-australia/delete/{id}', [KotaAustraliaController::class, 'delete'])->name('kotaaustralia.delete')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');
Route::match(['get', 'post'], '/kota-australia/edit/{id}', [KotaAustraliaController::class, 'edit'])->name('kotaaustralia.edit')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');

Route::get('/kota-afrika', [KotaAfrikaController::class, 'index'])->name('kotaafrika.list');
Route::get('/kota-afrika/detail/{id}', [KotaAfrikaController::class, 'detail'])->name('kotaafrika.detail');
Route::match(['get', 'post'], '/kota-afrika/create', [KotaAfrikaController::class, 'create'])->name('kotaafrika.create')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');
Route::match(['get', 'post'], '/kota-afrika/delete/{id}', [KotaAfrikaController::class, 'delete'])->name('kotaafrika.delete')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');
Route::match(['get', 'post'], '/kota-afrika/edit/{id}', [KotaAfrikaController::class, 'edit'])->name('kotaafrika.edit')->middleware(\App\Http\Middleware\CekLogin::class . ':admin');

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login", [AuthController::class, 'login'])->name('login');
Route::post("/login", [AuthController::class, 'do_login']);
Route::get("/register", [AuthController::class, 'register']);
Route::post("/register", [AuthController::class, 'do_register']);
Route::get("/logout", [AuthController::class, 'logout']);
