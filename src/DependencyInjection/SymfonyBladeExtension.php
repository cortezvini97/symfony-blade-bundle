<?php

namespace Cortez\SymfonyBladeBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;

class SymfonyBladeExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        // Carrega o arquivo de configuração YAML

        $loader = new YamlFileLoader($container, new FileLocator(dirname(__DIR__, 2).'/Resources/config'));
        $loader->load('symfony_blade.yaml');
    }
}