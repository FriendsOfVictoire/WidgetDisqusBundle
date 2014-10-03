<?php
namespace Victoire\Widget\DisqusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Bundle\WidgetBundle\Entity\Widget;

/**
 * WidgetDisqus
 *
 * @ORM\Table("vic_widget_disqus")
 * @ORM\Entity
 */
class WidgetDisqus extends Widget
{
    /**
     * @var string
     *
     * @ORM\Column(name="disqus_shortname", type="string", length=255)
     */
    protected $disqusShortname;

    /**
     * To String function
     * Used in render choices type (Especially in VictoireWidgetRenderBundle)
     * //TODO Check the generated value and make it more consistent
     *
     * @return String
     */
    public function __toString()
    {
        return '#'.$this->id.' - '.$this->id;
    }

    /**
     * Set disqusShortname
     *
     * @param string $disqusShortname
     */
    public function setDisqusshortname($disqusShortname)
    {
        $this->disqusShortname = $disqusShortname;

        return $this;
    }

    /**
     * Get disqusShortname
     *
     * @return string
     */
    public function getDisqusshortname()
    {
        return $this->disqusShortname;
    }

}
