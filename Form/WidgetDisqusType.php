<?php

namespace Victoire\Widget\DisqusBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Victoire\Bundle\CoreBundle\Form\WidgetType;
use Victoire\Bundle\WidgetBundle\Entity\Widget;

/**
 * WidgetDisqus form type.
 */
class WidgetDisqusType extends WidgetType
{
    /**
     * define form fields.
     *
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $mode = $options['mode'];

        //choose form mode
        if ($mode === Widget::MODE_STATIC) {
            //if no entity is given, we generate the static form
            $builder->add('disqusShortname');
        }

        parent::buildForm($builder, $options);
    }

    /**
     * bind form to WidgetDisqus entity.
     *
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setDefaults([
            'data_class'         => 'Victoire\Widget\DisqusBundle\Entity\WidgetDisqus',
            'widget'             => 'disqus',
            'translation_domain' => 'victoire',
        ]);
    }

    /**
     * get form name.
     *
     * @return string The name of the form
     */
    public function getName()
    {
        return 'victoire_widget_form_disqus';
    }
}
