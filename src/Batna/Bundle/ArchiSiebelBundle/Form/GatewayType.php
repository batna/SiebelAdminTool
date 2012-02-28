<?php

namespace Batna\Bundle\ArchiSiebelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class GatewayType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('machine')
        ;
    }

    public function getName()
    {
        return 'batna_bundle_archisiebelbundle_gatewaytype';
    }
}
