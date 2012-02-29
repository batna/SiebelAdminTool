<?php

namespace Batna\Bundle\ArchiSiebelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class BddType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('type')
            ->add('version')
            ->add('name')
            ->add('host')
        ;
    }

    public function getName()
    {
        return 'batna_bundle_archisiebelbundle_bddtype';
    }
}
