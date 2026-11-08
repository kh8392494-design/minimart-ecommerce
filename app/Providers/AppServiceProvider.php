<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // <-- បន្ថែមបណ្ណាល័យនេះនៅខាងលើ

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // បន្ថែមប៊ិចកូដនេះដើម្បីบังคับ HTTPS ពេលរត់លើ Production
        if (env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }
    }
}
