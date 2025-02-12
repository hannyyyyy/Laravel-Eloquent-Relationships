<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id; // broadcasting di Laravel untuk mengizinkan pengguna mendengarkan channel tertentu hanya jika mereka memiliki ID yang sesuai dengan parameter channel tersebut. Ini digunakan dalam sistem real-time event broadcasting, misalnya untuk aplikasi chat atau aplikasi yang membutuhkan pembaruan data secara langsung.
    // 'App.Models.User.{id}' adalah nama channel yang digunakan dalam event broadcasting. Nama channel ini mencakup placeholder {id}, yang berarti channel ini bisa digunakan untuk pengguna tertentu berdasarkan id mereka.
    // Misalnya, jika kamu ingin mengirim pesan ke pengguna dengan ID 1, maka nama channel yang akan digunakan adalah App.Models.User.1.
    // Broadcast::channel('App.Models.User.{id}') mengatur nama channel dinamis berdasarkan ID pengguna.
});
