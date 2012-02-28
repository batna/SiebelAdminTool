<?php

namespace Batna\ArchiSiebelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Batna\ArchiSiebelBundle\Entity\Machine;

class LoadCategoryData implements FixtureInterface
{
    public function load($manager)
    {    
        $machines = array(array('hostname'=>"BAT001", 'ip'=>'127.0.0.1', 'type'=>'p', 'os'=>'Windows Server 2003 R2 SP1', 'ram'=>'4 Go', 'cpuCore'=>'6', 'cpuFrequency'=>'', 'parent'=>''),
                          array('hostname'=>"BAT002", 'ip'=>'127.0.0.2', 'type'=>'v', 'os'=>'Windows Server 2003 R2 SP1', 'ram'=>'4 Go', 'cpuCore'=>'6', 'cpuFrequency'=>'', 'parent'=>'1'),
                          array('hostname'=>"BAT003", 'ip'=>'127.0.0.3', 'type'=>'v', 'os'=>'Windows Server 2003 R2 SP1', 'ram'=>'4 Go', 'cpuCore'=>'6', 'cpuFrequency'=>'', 'parent'=>'1'),
                          array('hostname'=>"BAT004", 'ip'=>'127.0.0.4', 'type'=>'v', 'os'=>'Windows Server 2003 R2 SP1', 'ram'=>'4 Go', 'cpuCore'=>'6', 'cpuFrequency'=>'', 'parent'=>'1'),
                          array('hostname'=>"BAT005", 'ip'=>'127.0.0.5', 'type'=>'p', 'os'=>'Windows Server 2003 R2 SP1', 'ram'=>'4 Go', 'cpuCore'=>'6', 'cpuFrequency'=>'', 'parent'=>''),
                          array('hostname'=>"BAT006", 'ip'=>'127.0.0.6', 'type'=>'v', 'os'=>'Windows Server 2003 R2 SP1', 'ram'=>'4 Go', 'cpuCore'=>'6', 'cpuFrequency'=>'', 'parent'=>'5'),
                          array('hostname'=>"BAT007", 'ip'=>'127.0.0.7', 'type'=>'v', 'os'=>'Windows Server 2003 R2 SP1', 'ram'=>'4 Go', 'cpuCore'=>'6', 'cpuFrequency'=>'', 'parent'=>'5'),
                          array('hostname'=>"BAT008", 'ip'=>'127.0.0.8', 'type'=>'p', 'os'=>'Windows Server 2003 R2 SP1', 'ram'=>'4 Go', 'cpuCore'=>'6', 'cpuFrequency'=>'', 'parent'=>''),
                          array('hostname'=>"BAT009", 'ip'=>'127.0.0.9', 'type'=>'v', 'os'=>'Windows Server 2003 R2 SP1', 'ram'=>'4 Go', 'cpuCore'=>'6', 'cpuFrequency'=>'', 'parent'=>'9'),
                          array('hostname'=>"BAT010", 'ip'=>'127.0.0.10','type'=>'p', 'os'=>'Windows Server 2003 R2 SP1', 'ram'=>'4 Go', 'cpuCore'=>'6', 'cpuFrequency'=>'', 'parent'=>''));

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
