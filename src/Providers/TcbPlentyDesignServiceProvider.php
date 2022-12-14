<?php

namespace TcbPlentyDesign\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class TcbPlentyDesignServiceProvider
 * @package TcbPlentyDesign\Providers
 */
class TcbPlentyDesignServiceProvider extends ServiceProvider
{
    /**
    * Register the route service provider
    */
    public function register()
    {
        $this->getApplication()->register(TcbPlentyDesignRouteServiceProvider::class);
    }
}