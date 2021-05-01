<?php

namespace Leonardcodep\Adsbygoogle;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AdsbygoogleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('scriptadsbygoogle', function ($expression) {
            return '<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client='.config('adsbygoogle.client_id').'" crossorigin="anonymous"></script>';
        });
        Blade::directive('pushadsbygoogle', function ($expression) {
            return '<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>';
        });
        Blade::directive('anchoradsbygoogle', function ($expression) {
            return '<script>(adsbygoogle = window.adsbygoogle || []).push({google_ad_client: "'.config('adsbygoogle.client_id').'",enable_page_level_ads: true,overlays: {bottom: true}});</script>';
        });

        $sourceViewsPath = __DIR__.'/../resources/views';
        $this->loadViewsFrom($sourceViewsPath, 'adsbygoogle');

        $this->publishes([
            $sourceViewsPath => resource_path('views/vendor/adsbygoogle'),
        ], 'views');

        $this->publishes([
            __DIR__ . '/../config/adsbygoogle.php' => config_path('adsbygoogle.php'),
        ], 'config');


        $this->mergeConfigFrom(
            __DIR__.'/../config/adsbygoogle.php', 'adsbygoogle'
        );

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Adsbygoogle', \Leonardcodep\Adsbygoogle\AdsbygoogleFacade::class);
    }
}
