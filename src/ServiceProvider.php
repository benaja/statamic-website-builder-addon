<?php

namespace Benaja\StatamicWebsiteBuilder;

use Statamic\Providers\AddonServiceProvider;
use Statamic\Facades\CP\Nav;

class ServiceProvider extends AddonServiceProvider
{
    protected $routes = [
        'cp' => __DIR__.'/../routes/cp.php',
    ];

    protected $scripts = [
        __DIR__.'/../public/js/register-components.js'
    ];

    protected $stylesheets = [
        __DIR__.'/../public/css/app.css'
    ];

    public function bootAddon()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'statamic');

        Nav::extend(function ($nav) {
            $nav->content('Store')
                ->route('store.index')
                ->icon('shopping-cart');
        });
    }
}
