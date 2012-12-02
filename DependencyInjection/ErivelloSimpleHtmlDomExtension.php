<?php

namespace Erivello\Bundle\SimpleHtmlDomBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * ErivelloSimpleHtmlDomExtension.
 *
 * @author Edoardo Rivello <edoardo.rivello@gmail.com>
 */
class ErivelloSimpleHtmlDomExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('config.xml');
    }
}
