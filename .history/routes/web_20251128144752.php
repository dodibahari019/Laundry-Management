<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::previkscontroller(UserController::class)->group(function(){
    // MAIN MENU
    route::get('/manage-users', 'index');
    // CRUD
    route::get('/manage-users/create', 'create');
    route::post('/manage-users/store', 'store');
    route::get('/manage-users/{id_user}/edit', 'edit');
    route::put('/manage-users/{id_user}/update', 'update');
    route::delete('/manage0-users/{id_user}/delete', 'destroy');
});
