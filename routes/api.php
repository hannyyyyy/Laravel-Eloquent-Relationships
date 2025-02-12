<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user(); 
    // rute (route) yang menggunakan middleware auth:sanctum dalam Laravel untuk mengamankan akses ke endpoint /user. Middleware ini memastikan bahwa hanya pengguna yang telah diautentikasi menggunakan Laravel Sanctum yang dapat mengaksesnya.
    // Route::middleware('auth:sanctum') → Middleware auth:sanctum digunakan untuk memastikan bahwa pengguna yang mengakses endpoint ini telah terautentikasi menggunakan Laravel Sanctum.
    // Sanctum adalah package Laravel yang menyediakan autentikasi berbasis token API untuk aplikasi SPAs (Single Page Applications) atau aplikasi mobile.
    // get('/user', function (Request $request) → Mendefinisikan rute HTTP GET untuk endpoint /user. Rute ini menerima objek Request sebagai parameter.
    // return $request->user(); → Mengembalikan data pengguna yang telah terautentikasi. Fungsi $request->user() akan mengembalikan model pengguna yang terautentikasi, yang biasanya berupa objek User.
});
