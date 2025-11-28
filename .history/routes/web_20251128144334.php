<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(UserController::class)->group(function(){
    // MAIN MENU
    route::get('/manage-users', 'index');
    // CRUD
    route::get('/manage-users/create', 'create');
    route::post('/manage-users/{id_user}/edit')
});
