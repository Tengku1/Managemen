<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public const HOME = '/home';

    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            Route::prefix('purchase-order')
                ->as("order.")
                ->middleware(['web', 'auth'])
                ->namespace($this->namespace)
                ->group(base_path('routes/order.php'));

            Route::prefix('penerimaan-barang')
                ->as("penerimaan.")
                ->middleware(['web', 'auth'])
                ->namespace($this->namespace)
                ->group(base_path('routes/penerimaan.php'));

            Route::prefix('faktur')
                ->as("faktur.")
                ->middleware(['web', 'auth'])
                ->namespace($this->namespace)
                ->group(base_path('routes/faktur.php'));

            Route::prefix('penagihan')
                ->as("penagihan.")
                ->middleware(['web', 'auth'])
                ->namespace($this->namespace)
                ->group(base_path('routes/penagihan.php'));

            Route::prefix('rekap-bank')
                ->as("bank.")
                ->middleware(['web', 'auth'])
                ->namespace($this->namespace)
                ->group(base_path('routes/bank.php'));

            Route::prefix('hutang')
                ->as("hutang.")
                ->middleware(['web', 'auth'])
                ->namespace($this->namespace)
                ->group(base_path('routes/hutang.php'));

            Route::prefix('informasi-pembayaran')
                ->as("informasi.")
                ->middleware(['web', 'auth'])
                ->namespace($this->namespace)
                ->group(base_path('routes/informasi.php'));

            Route::prefix('pembelian-dimuka')
                ->as("pembelian-dimuka.")
                ->middleware(['web', 'auth'])
                ->namespace($this->namespace)
                ->group(base_path('routes/pembelian_dimuka.php'));

            Route::prefix('pembelian-kontan')
                ->as("kontan.")
                ->middleware(['web', 'auth'])
                ->namespace($this->namespace)
                ->group(base_path('routes/kontan.php'));

            Route::prefix('rekap-pembayaran')
                ->as("rekap-pembayaran.")
                ->middleware(['web', 'auth'])
                ->namespace($this->namespace)
                ->group(base_path('routes/rekap_pembayaran.php'));

            Route::prefix('rekap-pembelian')
                ->as("rekap-pembelian.")
                ->middleware(['web', 'auth'])
                ->namespace($this->namespace)
                ->group(base_path('routes/rekap_pembelian.php'));

            Route::prefix('kasbon')
                ->as("kasbon.")
                ->middleware(['web', 'auth'])
                ->namespace($this->namespace)
                ->group(base_path('routes/kasbon.php'));
        });
    }

    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
