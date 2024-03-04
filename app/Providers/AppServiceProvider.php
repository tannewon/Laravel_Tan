<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    // public function register()
    // {
    //     //
    // }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Blade::directive('datetime', function ($expression) {
            $dateObject = date_create($expression);
            if (!empty($dateObject)){
                return "<?php echo $dateObject->format('d/m/Y H:i:s'); ?>";
            }
            return false;
        });
    }
}
