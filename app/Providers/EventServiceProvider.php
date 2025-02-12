<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Pemetaan event ke listener dalam aplikasi.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        // Event ketika pengguna baru terdaftar
        Registered::class => [
            // Listener untuk mengirim notifikasi verifikasi email
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Mendaftarkan event dan listener yang digunakan dalam aplikasi.
     *
     * @return void
     */
    public function boot()
    {
        // Dapat digunakan untuk mendaftarkan event secara manual
    }

    /**
     * Menentukan apakah event dan listener harus ditemukan secara otomatis.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false; // Set true jika ingin menggunakan fitur auto-discovery
    }
}
