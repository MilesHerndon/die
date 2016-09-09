<?php
namespace Craft;

use Twig_Extension;
use Twig_SimpleFunction;

class DieTwigExtension extends \Twig_Extension
{

    public function getName()
    {
        return 'Die';
    }

    public function getFunctions()
    {
        return array(
            new Twig_SimpleFunction('die', array($this, 'die')),
        );
    }



    public function die()
    {
      die();
    }

}
