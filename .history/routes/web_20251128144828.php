<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('users')->controller(UserController::class)->group(function(){
    // MAIN MENU
    route::get('', 'index');
    // CRUD
    route::get('/create', 'create');
    route::post('/store', 'store');
    route::get('/{id_user}/edit', 'edit');
    route::put('/{id_user}/update', 'update');
    route::delete('/manage0-users/{id_user}/delete', 'destroy');
});
