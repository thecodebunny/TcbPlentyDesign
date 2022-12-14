<?php

namespace TcbPlentyDesign\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class TcbPlentyDesignController extends Controller
{
    /**
     * @param Twig $twig
     * @return string
     */
    public function getHelloWorldPage(Twig $twig):string
    {
        return $twig->render('TcbPlentyDesign::Index');
    }
}