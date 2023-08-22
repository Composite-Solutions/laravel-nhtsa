<?php

namespace Composite\LaravelNhtsa;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class NhtsaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $configPath = __DIR__.'/../config/nhtsa.php';

        $this->publishes([
            $configPath => $this->app->configPath('nhtsa.php'),
        ], 'config');

        $this->mergeConfigFrom($configPath, 'nhtsa');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind('nhtsa', static function (Application $app) {
            $config = $app['config']['nhtsa'];

            return new Nhtsa(
                new Gateway($config['service_url'])
            );
        });

        $this->app->alias('nhtsa', Nhtsa::class);
    }
}
