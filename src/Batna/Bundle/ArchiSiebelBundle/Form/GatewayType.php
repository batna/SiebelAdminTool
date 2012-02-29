<?php

namespace Batna\Bundle\ArchiSiebelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class GatewayType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('port')
            ->add('description')
            ->add('host')
            ->add('environnement')
            ->add('bdd')
        ;
    }

    public function getName()
    {
        return 'batna_bundle_archisiebelbundle_gatewaytype';
    }
}
