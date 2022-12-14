<?php

namespace TcbPlentyDesign\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class TcbPlentyDesignRouteServiceProvider
 * @package TcbPlentyDesign\Providers
 */
class TcbPlentyDesignRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->get('hello-world','TcbPlentyDesign\Controllers\TcbPlentyDesignController@getHelloWorldPage');
    }
}