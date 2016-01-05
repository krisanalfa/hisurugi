<?php

namespace HitenMitsurugi\Ryutsuisen\Providers;

use Illuminate\Support\ServiceProvider;
use HitenMitsurugi\Ryutsuisen\Contracts\User as UserContract;
use HitenMitsurugi\Ryutsuisen\Contracts\Role as RoleContract;
use HitenMitsurugi\Ryutsuisen\Contracts\Permission as PermissionContract;

class RyutsuisenProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutes();

        $this->loadViewsFrom(realpath(dirname(__DIR__).'/resources/views'), 'ryutsuisen');

        $this->loadTranslationsFrom(realpath(dirname(__DIR__).'/resources/lang'), 'ryutsuisen');

        $this->publishes([
            realpath(dirname(__DIR__).'/config/ryutsuisen.php') => config_path('ryutsuisen.php'),
        ], 'config');

        $this->publishes([
            realpath(dirname(__DIR__).'/resources/views') => resource_path('views/vendor/ryutsuisen'),
        ], 'views');

        $this->publishes([
            realpath(dirname(__DIR__).'/resources/lang') => resource_path('lang/vendor/ryutsuisen'),
        ], 'lang');

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
        $this->mergeConfigFrom(realpath(dirname(__DIR__).'/config/ryutsuisen.php'), 'ryutsuisen');

        $this->bindClasses();
    }

    /**
     * Register route.
     *
     * @return void
     */
    protected function loadRoutes()
    {
        if (! $this->app->routesAreCached()) {
            require realpath(dirname(__DIR__).'/Http/routes.php');
        }
    }

    /**
     * Bind classes.
     *
     * @return void
     */
    protected function bindClasses()
    {
        foreach ([
            [UserContract::class => 'ryutsuisen.user'],
            [RoleContract::class => 'ryutsuisen.role'],
            [PermissionContract::class => 'ryutsuisen.permission'],
        ] as $binding) {
            list($abstract, $alias) = $this->extractAlias($binding);

            $this->app->singleton($binding, $this->app->config->get($alias));
        }
    }

    /**
     * Extract the type and alias from a given definition.
     *
     * @param  array  $definition
     *
     * @return array
     */
    protected function extractAlias(array $definition)
    {
        return [key($definition), current($definition)];
    }
}
