<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\UserController;
use  App\Http\Controllers\AuthController;


Route::get('/ping', function(){
    return ['pong' => true];
});

Route::get('/401', [AuthController::class, 'unauthorized'])->name('login');

Route::post('/auth/login',[AuthController::class, 'login']);
Route::post('/auth/logout',[AuthController::class, 'logout']);
Route::post('/auth/refresh',[AuthController::class, 'refresh']);

Route::post('/user', [AuthController::class, 'create']);

Route::put('/user', [UserController::class, 'update']);

