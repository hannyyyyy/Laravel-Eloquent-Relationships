<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap layanan broadcasting dalam aplikasi.
     *
     * @return void
     */
    public function boot()
    {
        // Mendaftarkan rute untuk broadcasting
        // Ini memungkinkan autentikasi channel melalui '/broadcasting/auth'
        Broadcast::routes();

        // Memuat file 'routes/channels.php' yang berisi definisi channel broadcasting
        require base_path('routes/channels.php');
    }
}
