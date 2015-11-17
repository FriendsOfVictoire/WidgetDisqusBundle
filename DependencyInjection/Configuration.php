<?php

namespace Victoire\Widget\DisqusBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @author Paul Andrieux
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('victoire_widget_disqus');
        $rootNode
            ->children()
                ->scalarNode('disqus_name')
                    ->defaultNull()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
