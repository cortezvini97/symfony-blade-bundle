<?php

namespace Cortez\SymfonyBladeBundle;

use Cortez\SymfonyBladeBundle\DependencyInjection\SymfonyBladeExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class SymfonyBladeBundle extends AbstractBundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        // Registra a classe de extensão para carregar o arquivo de configuração
        $container->registerExtension(new SymfonyBladeExtension());
    }
    public function getPath(): string
    {
        return dirname(__DIR__, 1);
    }

}