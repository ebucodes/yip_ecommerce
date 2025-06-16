<?php

namespace App\Providers;

use App\Services\SmartyTemplateService;
use Illuminate\Support\ServiceProvider;
use Smarty\Smarty;

class SmartyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        // 
        $this->app->bind(SmartyTemplateService::class, function ($app) {
            return new SmartyTemplateService($app->make('smarty'));
        });

        // In SmartyServiceProvider.php register() method:
        $this->app->singleton('smarty', function ($app) {
            $smarty = new Smarty();

            // Define paths
            $templateDir = resource_path('views/smarty/templates/');
            $compileDir = storage_path('framework/smarty/templates_c/');
            $cacheDir = storage_path('framework/smarty/cache/');
            $configDir = resource_path('views/smarty/configs/');

            // Create directories if they don't exist
            foreach ([$templateDir, $compileDir, $cacheDir, $configDir] as $dir) {
                if (!is_dir($dir)) {
                    mkdir($dir, 0755, true);
                }
            }

            // Configure Smarty directories
            $smarty->setTemplateDir($templateDir);
            $smarty->setCompileDir($compileDir);
            $smarty->setCacheDir($cacheDir);
            $smarty->setConfigDir($configDir);

            // Set caching
            $smarty->setCaching(config('app.debug') ? 0 : 1);
            $smarty->setCacheLifetime(3600);

            return $smarty;
        });
    }


    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
