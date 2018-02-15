<?php

namespace AppBundle\DependencyInjection\Compiler;


use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class MusicPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $definition = $container->findDefinition('AppBundle\Music\MusicCollection');

        $taggedServices = $container->findTaggedServiceIds('app.music');

        $musics = [];
        foreach ($taggedServices as $id => $tags) {
            $musics[] = new Reference($id);
        }
        $definition->addMethodCall('setCollection', array($musics));
    }

}