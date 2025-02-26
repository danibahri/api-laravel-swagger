<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/users',[UserController::class,'get']);
Route::post('/users',[UserController::class,'post']);
Route::get('/users/{id}',[UserController::class,'getById']);