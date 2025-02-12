<?php

namespace App\Providers;

// Import Service Provider untuk sistem otentikasi dan otorisasi Laravel
// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Pemetaan model ke kebijakan (policy) otorisasi aplikasi.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Mendaftarkan layanan otentikasi dan otorisasi.
     *
     * @return void
     */
    public function boot()
    {
        // Mendaftarkan kebijakan (policies) yang telah didefinisikan
        $this->registerPolicies();

        // Di sini bisa ditambahkan aturan otorisasi tambahan menggunakan Gate
    }
}
