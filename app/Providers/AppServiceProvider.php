<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Mendaftarkan service aplikasi.
     * Metode ini digunakan untuk binding service ke container aplikasi.
     *
     * @return void
     */
    public function register()
    {
        // Tempat untuk mendaftarkan service atau binding dependency injection.
        // Contoh: $this->app->bind(SomeInterface::class, SomeImplementation::class);
    }

    /**
     * Melakukan konfigurasi bootstrapping untuk service aplikasi.
     * Metode ini dipanggil setelah semua service terdaftar.
     *
     * @return void
     */
    public function boot()
    {
        // Tempat untuk menambahkan konfigurasi global, seperti:
        // - Custom validator
        // - Custom Blade directives
        // - Model observers
        // - Pengaturan default database (misalnya schema default string length)
    }
}
