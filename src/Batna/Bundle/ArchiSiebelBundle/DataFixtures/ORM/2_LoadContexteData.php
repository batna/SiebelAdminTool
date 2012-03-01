<?php

namespace Batna\ArchiSiebelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Batna\Bundle\ArchiSiebelBundle\Entity\Contexte;
use Doctrine\Common\Persistence\ObjectManager;


class LoadContexteData implements FixtureInterface
{
    public function getOrder()
    {
        return 2; 
    }
    
    public function load(ObjectManager $manager)
    {
    
        $contextes = array(
            array('short'=>'PROD', 'long'=>'Production', 'desc'=>'Contexte de production'),
            array('short'=>'PREPROD', 'long'=>'Pré Production', 'desc'=>'Contexte tampon avant passage en production'),
            array('short'=>'REC', 'long'=>'Recette', 'desc'=>'Contexte de recette applicative'),
            array('short'=>'INT', 'long'=>'Intégration', 'desc'=>'Contexte de tests unitaires des applications'),
            array('short'=>'DEV', 'long'=>'Développement', 'desc'=>'Contexte de développement des applications'),
        );
    
    
        foreach($contextes as $c){
            $contexte = new Contexte();
            $contexte->setShortName($c['short']);
            $contexte->setLongName($c['long']);
            $contexte->setDescription($c['desc']);

            $manager->persist($contexte);
            $manager->flush();
        }
    }
}
