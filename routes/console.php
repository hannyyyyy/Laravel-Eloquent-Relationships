<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
// penggunaan perintah Artisan di Laravel untuk membuat custom command yang menampilkan kutipan inspiratif. Artisan adalah tool command-line Laravel yang memungkinkan kamu untuk membuat dan menjalankan berbagai jenis perintah.
// Artisan::command: Fungsi ini digunakan untuk mendefinisikan perintah custom Artisan. Dalam hal ini, kita membuat perintah baru dengan nama inspire.
// 'inspire': Nama perintah yang akan digunakan di command line untuk menjalankan perintah ini. Kamu bisa menjalankannya dengan perintah
