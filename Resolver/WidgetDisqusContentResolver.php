<?php

namespace Victoire\Widget\DisqusBundle\Resolver;

use Victoire\Bundle\WidgetBundle\Model\Widget;
use Victoire\Bundle\WidgetBundle\Resolver\BaseWidgetContentResolver;

class WidgetDisqusContentResolver extends BaseWidgetContentResolver
{
    private $disqusName;

    public function __construct($disqusName = null)
    {
        $this->disqusName = $disqusName;
    }

    /**
     * {@inheritdoc}
     */
    public function getWidgetStaticContent(Widget $widget)
    {
        $parameters = parent::getWidgetStaticContent($widget);

        if (!array_key_exists('disqusShortname', $parameters) || $parameters['disqusShortname'] == null) {
            $parameters['disqusShortname'] = $this->disqusName;
        }

        return $parameters;
    }
}
