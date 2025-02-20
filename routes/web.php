<?php

use Illuminate\Support\Facades\Route;

// Menentukan route untuk halaman utama (/) yang akan menampilkan view 'welcome'.
Route::get('/', function () {
    return view('welcome');
});

/**
 * Route untuk mendapatkan daftar pengguna.
 * @path /users
 * @method GET
 */
Route::get('/users', [\App\Http\Controllers\UserController::class, 'index']);

/**
 * Route untuk mendapatkan daftar postingan.
 * @path /posts
 * @method GET
 */
Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index']);
