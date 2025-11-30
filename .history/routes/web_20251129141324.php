<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/dashboard', function(){
    return view('dashboard');
});

Route::get('/orders', function(){
    return view('orders.main');
});

Route::get('/layanan', function(){
    return view('layanan.main');
});

Route::prefix('users')->controller(UserController::class)->group(function(){
    // MAIN MENU
    route::get('/', 'index');
    // CRUD
    route::get('/create', 'create');
    route::post('/', 'store');
    route::get('/{id_user}/edit', 'edit');
    route::put('/{id_user}', 'update');
    route::delete('/{id_user}', 'destroy');
});

Route::prefix('layanan')->controller(LayananController::class)->group(function(){
    // MAIN MENU
    route::get('/', 'index');
    // CRUD
    route::get('/create', 'create');
    route::post('/', 'strore');
    route::get('/{id_layanan}/edit', 'edit');
    route::put('/{id_layanan}', 'update');
    route::delete('/{id_layanan}', 'destroy');
});

Route::prefix('pelanggan')->controller(PelangganController::class)->group(function(){
    // MAIN MENU
    route::get('/', 'index');
    // CRUD
    route::get('/create', 'create');
    route::post('/','store');
    route::get('/{id_pelanggan}/edit', 'edit');
    route::put('/{id_pelanggan}', 'update');
    route::delete('/{id_pelanggan}', 'destroy');
});
