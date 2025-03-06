<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/users',[UserController::class,'get'])->name('api.users');
Route::post('/users',[UserController::class,'post'])->name('api.users.store');
Route::get('/users/{id}',[UserController::class,'getById'])->name('api.users.id');
Route::get('/users/delete/{id}',[UserController::class,'delete'])->name('api.users.delete');
Route::put('/users/update/{id}', [UserController::class, 'update'])->name('api.users.update');