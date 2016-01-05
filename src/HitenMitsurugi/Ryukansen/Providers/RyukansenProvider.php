<?php

namespace HitenMitsurugi\Ryukansen\Providers;

use DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\ConnectionResolverInterface;
use HitenMitsurugi\Ryukansen\Commands\MigrationCommand;

class RyukansenProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(realpath(dirname(__DIR__).'/resources/views'), 'ryukansen');

        $this->commands('command.ryukansen.migration');

        $this->publishes([
            realpath(dirname(__DIR__).'/resources/assets/sass') => resource_path('assets/vendor/ryutsuisen/sass'),
        ], 'sass');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerCommands();

        $this->app->singleton(ConnectionResolverInterface::class, function () {
            return DB::getFacadeRoot();
        });
    }

    /**
     * Register the artisan commands.
     *
     * @return void
     */
    private function registerCommands()
    {
        $this->app->singleton('command.ryukansen.migration', function ($app) {
            return new MigrationCommand();
        });
    }
}
