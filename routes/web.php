<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\Cors;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'getAllUsers'])->middleware(Cors::class);

