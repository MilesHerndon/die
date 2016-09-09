<?php
namespace Craft;

class DiePlugin extends BasePlugin
{
    public function getName()
    {
         return Craft::t('Die');
    }

    public function getVersion()
    {
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return 'MilesHerndon';
    }

    public function getDeveloperUrl()
    {
        return 'http://milesherndon.com';
    }

    public function hasCpSection()
    {
        return false;
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.die.twigextensions.DieTwigExtension');

        return new DieTwigExtension();
    }
}
