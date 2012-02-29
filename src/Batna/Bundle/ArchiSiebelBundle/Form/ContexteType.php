<?php

namespace Batna\Bundle\ArchiSiebelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ContexteType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('shortName')
            ->add('longName')
            ->add('description')
        ;
    }

    public function getName()
    {
        return 'batna_bundle_archisiebelbundle_contextetype';
    }
}
