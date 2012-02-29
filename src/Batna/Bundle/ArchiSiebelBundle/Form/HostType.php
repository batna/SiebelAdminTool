<?php

namespace Batna\Bundle\ArchiSiebelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class HostType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('hostname')
            ->add('ip')
            ->add('type')
            ->add('os')
            ->add('ram')
            ->add('cpuCore')
            ->add('cpuFrequency')
            ->add('parent')
        ;
    }

    public function getName()
    {
        return 'batna_bundle_archisiebelbundle_hosttype';
    }
}
