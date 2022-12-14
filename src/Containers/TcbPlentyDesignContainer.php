<?php

namespace TcbPlentyDesign\Containers;

use Plenty\Plugin\Templates\Twig;

class TcbPlentyDesignContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('TcbPlentyDesign::content.TcbPlentyDesign');
    }
}