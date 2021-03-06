<?php

namespace Batna\ArchiSiebelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Batna\ArchiSiebelBundle\Entity\Machine;

class LoadMachineData implements FixtureInterface
{
    public function load($manager)
    {    
        $machines = array(
                        array('hostname'=>"BAT001", 
                                'ip'=>'127.0.0.1', 
                                'type'=>'P', 
                                'os'=>'Windows Server 2003 R2 SP1', 
                                'ram'=>'4 Go', 
                                'cpuCore'=>'6', 
                                'cpuFrequency'=>'2', 
                                'parent'=>'2')
                               );


        foreach($machines as $m)
        {
            $machine  = new Machine();
            $machine->setHostname($m['hostname']);
            $machine->setIp($m['ip']);
            $machine->setType($m['type']);
            $machine->setOs($m['os']);
            $machine->setRam($m['ram']);
            $machine->setCpuCore($m['cpuCore']);
            $machine->setCpuFrequency($m['cpuFrequency']);
            $machine->setParent($m['parent']);
            $manager->persist($m);
        }        
        $manager->flush();

    }

}
