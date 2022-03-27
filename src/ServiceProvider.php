<?php

namespace Benaja\StatamicWebsiteBuilder;

use Statamic\Facades\CP\Nav;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $routes = [
        'cp' => __DIR__.'/../routes/cp.php',
    ];

    protected $scripts = [
        __DIR__.'/../public/js/register-components.js',
    ];

    protected $stylesheets = [
        __DIR__.'/../public/css/app.css',
    ];

    public function bootAddon()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'statamic');

        Nav::extend(function ($nav) {
            $nav->create('Colors')
                ->section('Style')
                ->route('style.colors')
                ->icon('shopping-cart');
        });
    }
}
