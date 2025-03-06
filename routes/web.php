<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return json_decode('{"message":"Selamat datang di API (User), dengan API Documentatio menggunakan Swagger", "Akses Documentation Swagger":"(/api/documentation)","get all user":"(/user)", "get user by id":"(/user/{id})", "create user":"(/user)", "update user":"(/users/update/{id})", "delete user":"(/users/delete/{id})"}');
});
