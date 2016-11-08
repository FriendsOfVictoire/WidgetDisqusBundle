<?php

namespace Victoire\Widget\DisqusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Bundle\WidgetBundle\Entity\Widget;

/**
 * WidgetDisqus.
 *
 * @ORM\Table("vic_widget_disqus")
 * @ORM\Entity
 */
class WidgetDisqus extends Widget
{
    /**
     * @var string
     *
     * @ORM\Column(name="shortname", type="string", length=255, nullable=true)
     */
    protected $shortname;

    /**
     * To String function
     * Used in render choices type (Especially in VictoireWidgetRenderBundle)
     *
     * @return string
     */
    public function __toString()
    {
        return '#Disqus - '.$this->id;
    }

    /**
     * Set shortname.
     *
     * @param string $shortname
     */
    public function setShortname($shortname)
    {
        $this->shortname = $shortname;

        return $this;
    }

    /**
     * Get shortname.
     *
     * @return string
     */
    public function getShortname()
    {
        return $this->shortname;
    }
}
