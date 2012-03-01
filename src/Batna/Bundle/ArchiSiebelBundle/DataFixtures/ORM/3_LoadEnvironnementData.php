<?php

namespace Batna\ArchiSiebelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Batna\Bundle\ArchiSiebelBundle\Entity\Environnement;
use Batna\Bundle\ArchiSiebelBundle\Entity\Contexte;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityRepository;


class LoadEnvironnementData implements FixtureInterface
{
    public function getOrder()
    {
        return 3; 
    }
    
    public function load(ObjectManager $manager)
    {
    
        $environnements = array(
            array('short'=>'PROD', 'long'=>'Production Pilote', 'desc'=>'Environnement de production pilote', 'contexte'=>1),
            array('short'=>'Prod Cible', 'long'=>'Production Cible', 'desc'=>'Environnement de production cible', 'contexte'=>1),
        );
    
    
        foreach($environnements as $e){
            $environnement = new Environnement();
            $environnement->setShortName($e['short']);
            $environnement->setLongName($e['long']);
            $environnement->setDescription($e['desc']);
            $environnement->setContexte(1);
           
            $manager->persist($environnement);
            $manager->flush();
        }
    }
}
