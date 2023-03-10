<?php

namespace Cirelramos\RawQuery\Providers;

use Cirelramos\RawQuery\Services\RawQueryService;

/**
 *
 */
class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->app->bind('raw-query-service', function()
        {
            return new RawQueryService();
        });

        $this->mergeConfig();

    }

    public function boot()
    {
        $this->publishConfig();
        $this->publishMigrations();
    }

    private function mergeConfig()
    {
        $this->mergeConfigFrom($this->getConfigPath(), 'raw-query');
    }

    private function publishConfig()
    {
        // Publish a config file
        $this->publishes([ $this->getConfigPath() => config_path('raw-query.php'), ], 'config');
    }

    private function publishMigrations()
    {
//        $path = $this->getMigrationsPath();
//        $this->publishes([$path => database_path('migrations')], 'migrations');
    }

    /**
     * @return string
     */
    private function getConfigPath()
    {
        return __DIR__ . '/../../config/raw-query.php';
    }

    /**
     * @return string
     */
    private function getMigrationsPath()
    {
        return __DIR__ . '/../database/migrations/';
    }

}
