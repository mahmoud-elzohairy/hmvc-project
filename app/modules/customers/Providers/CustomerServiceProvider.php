<?php

namespace Customers\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;

class CustomerServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $moduleName = basename(dirname(__DIR__, 1));
        config([
            $moduleName => [
                'route' => File::getRequire(loadConfig('route', $moduleName)),
                'general' => File::getRequire(loadConfig('general', $moduleName)),
            ],
        ]);
        $this->loadRoutesFrom(loadRoutes('web', $moduleName));
        $this->loadViewsFrom(loadViews($moduleName), $moduleName);
        $this->loadTranslationsFrom(loadLang($moduleName), $moduleName);
        $this->loadMigrationsFrom(loadMigrations($moduleName));
    }
}
