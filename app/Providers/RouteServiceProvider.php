<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Path default setelah login berhasil.
     *
     * Biasanya pengguna akan diarahkan ke path ini setelah berhasil login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Mendaftarkan binding model, filter pola, dan konfigurasi rute lainnya.
     *
     * @return void
     */
    public function boot()
    {
        // Mengonfigurasi pembatasan kecepatan (rate limiting)
        $this->configureRateLimiting();

        // Mendefinisikan grup rute untuk API dan Web
        $this->routes(function () {
            // Rute API
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            // Rute Web
            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Mengonfigurasi pembatasan kecepatan (rate limiting) untuk aplikasi.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            // Membatasi permintaan API hingga 60 kali per menit berdasarkan ID pengguna atau IP.
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
