<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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


Route::prefix('layanan')->controller(LayananController::class)->group(function(){})
