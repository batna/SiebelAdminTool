<?php

namespace Batna\Bundle\ArchiSiebelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class SiebelServerType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('logicalName')
            ->add('port')
            ->add('description')
            ->add('enterprise')
            ->add('host')
        ;
    }

    public function getName()
    {
        return 'batna_bundle_archisiebelbundle_siebelservertype';
    }
}
