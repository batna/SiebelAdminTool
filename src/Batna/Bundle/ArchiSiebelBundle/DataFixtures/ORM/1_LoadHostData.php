<?php

namespace Batna\ArchiSiebelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Batna\Bundle\ArchiSiebelBundle\Entity\Host;
use Doctrine\Common\Persistence\ObjectManager;


class LoadHostData implements FixtureInterface
{
    public function getOrder()
    {
        return 1; 
    }
    
    public function load(ObjectManager $manager)
    {
    
        $hosts = array(
            array('host'=>'VMSFRNDC01SIW01', 'ip'=>'206.114.246.116', 'type'=>'V', 'os'=>'Windows 2003 Server', 'ram'=>'8192', 'cpucore'=>'2', 'cpufreq'=>'1,56', 'parent'=>'1'),
            array('host'=>'VMSFRNDC01SIW02', 'ip'=>'242.51.64.48', 'type'=>'V', 'os'=>'Windows 2003 Server', 'ram'=>'5120', 'cpucore'=>'8', 'cpufreq'=>'0,39', 'parent'=>'2'),
            array('host'=>'VMSFRNDC01SIW03', 'ip'=>'208.186.79.65', 'type'=>'V', 'os'=>'Windows 2003 Server', 'ram'=>'3072', 'cpucore'=>'6', 'cpufreq'=>'1,96', 'parent'=>'3'),
            array('host'=>'SMSFRNDC01SIW04', 'ip'=>'194.60.6.208', 'type'=>'P', 'os'=>'Windows 2003 Server', 'ram'=>'2048', 'cpucore'=>'3', 'cpufreq'=>'1,73', 'parent'=>'4'),
            array('host'=>'SMSFRNDC01SIPR1', 'ip'=>'213.121.130.122', 'type'=>'P', 'os'=>'Windows 2003 Server', 'ram'=>'1024', 'cpucore'=>'2', 'cpufreq'=>'1,35', 'parent'=>'5'),
            array('host'=>'SMSFRNDC01SIPR2', 'ip'=>'239.137.15.228', 'type'=>'P', 'os'=>'Windows 2003 Server', 'ram'=>'2048', 'cpucore'=>'8', 'cpufreq'=>'1,54', 'parent'=>'6'),
            array('host'=>'SMSFRNDC01SIPR3', 'ip'=>'192.189.58.22', 'type'=>'P', 'os'=>'Windows 2003 Server', 'ram'=>'8192', 'cpucore'=>'7', 'cpufreq'=>'0,27', 'parent'=>'1'),
            array('host'=>'SMSFRNDC01SIPR4', 'ip'=>'195.225.77.45', 'type'=>'P', 'os'=>'Windows 2003 Server', 'ram'=>'8192', 'cpucore'=>'2', 'cpufreq'=>'0,5', 'parent'=>'2'),
            array('host'=>'SMSFRNDC01SINY1', 'ip'=>'7.180.239.132', 'type'=>'P', 'os'=>'Windows 2003 Server', 'ram'=>'5120', 'cpucore'=>'5', 'cpufreq'=>'0,43', 'parent'=>'3'),
            array('host'=>'SMSFRNDC01SINY2', 'ip'=>'136.18.54.183', 'type'=>'P', 'os'=>'Windows 2003 Server', 'ram'=>'4096', 'cpucore'=>'4', 'cpufreq'=>'2,88', 'parent'=>'4'),
            array('host'=>'SMSFRNDC01SINY5', 'ip'=>'250.102.87.2', 'type'=>'P', 'os'=>'Windows 2003 Server', 'ram'=>'4096', 'cpucore'=>'4', 'cpufreq'=>'2,44', 'parent'=>'5'),
            array('host'=>'SMSFRNDC01SIVS1', 'ip'=>'50.183.177.3', 'type'=>'P', 'os'=>'Windows 2003 Server', 'ram'=>'1024', 'cpucore'=>'4', 'cpufreq'=>'2,97', 'parent'=>'6'),
            array('host'=>'SMSFRNDC01SIVS2', 'ip'=>'108.93.239.118', 'type'=>'P', 'os'=>'Windows 2003 Server', 'ram'=>'3072', 'cpucore'=>'7', 'cpufreq'=>'1,55', 'parent'=>'1'),
            array('host'=>'SMSFRNDC01SIQP1', 'ip'=>'211.44.14.152', 'type'=>'P', 'os'=>'Windows 2003 Server', 'ram'=>'1024', 'cpucore'=>'7', 'cpufreq'=>'2,28', 'parent'=>'2'),
            array('host'=>'SMSFRNDC01SIQP2', 'ip'=>'141.195.187.198', 'type'=>'P', 'os'=>'Windows 2003 Server', 'ram'=>'4096', 'cpucore'=>'4', 'cpufreq'=>'0,8', 'parent'=>'3'),
            array('host'=>'VMSFRNDC01SIGS1', 'ip'=>'93.20.252.122', 'type'=>'V', 'os'=>'Windows 2003 Server', 'ram'=>'7168', 'cpucore'=>'8', 'cpufreq'=>'1,87', 'parent'=>'4'),
            array('host'=>'VMSFRNDC01SIGS2', 'ip'=>'83.157.89.121', 'type'=>'V', 'os'=>'Windows 2003 Server', 'ram'=>'2048', 'cpucore'=>'6', 'cpufreq'=>'2', 'parent'=>'5'),
            array('host'=>'VMSFRNDC01SIGS3', 'ip'=>'31.117.105.55', 'type'=>'V', 'os'=>'Windows 2003 Server', 'ram'=>'4096', 'cpucore'=>'2', 'cpufreq'=>'2,77', 'parent'=>'6'),
            array('host'=>'VMSFRNDC01SIGW1', 'ip'=>'200.226.147.183', 'type'=>'V', 'os'=>'Windows 2003 Server', 'ram'=>'4096', 'cpucore'=>'8', 'cpufreq'=>'1,47', 'parent'=>'1'),
            array('host'=>'VMSFRNDC01SIGW2', 'ip'=>'54.194.100.190', 'type'=>'V', 'os'=>'Windows 2003 Server', 'ram'=>'3072', 'cpucore'=>'2', 'cpufreq'=>'0,52', 'parent'=>'2'),
            array('host'=>'SICLUSTPR', 'ip'=>'81.216.5.217', 'type'=>'C', 'os'=>'Windows 2003 Server', 'ram'=>'8192', 'cpucore'=>'7', 'cpufreq'=>'1,84', 'parent'=>'3'),
            array('host'=>'VMSFRNDC01GSW01', 'ip'=>'234.206.235.70', 'type'=>'V', 'os'=>'Windows 2003 Server', 'ram'=>'1024', 'cpucore'=>'5', 'cpufreq'=>'0,4', 'parent'=>'4'),
            array('host'=>'VMSFRNDC01GSW02', 'ip'=>'167.216.118.191', 'type'=>'V', 'os'=>'Windows 2003 Server', 'ram'=>'4096', 'cpucore'=>'6', 'cpufreq'=>'0,59', 'parent'=>'5'),
            array('host'=>'VMSFRNDC01GSW03', 'ip'=>'121.195.134.201', 'type'=>'V', 'os'=>'Windows 2003 Server', 'ram'=>'8192', 'cpucore'=>'6', 'cpufreq'=>'1,33', 'parent'=>'6'),
            array('host'=>'VMSFRNDC01GSW04', 'ip'=>'218.173.115.26', 'type'=>'V', 'os'=>'Windows 2003 Server', 'ram'=>'7168', 'cpucore'=>'5', 'cpufreq'=>'0,61', 'parent'=>'1'),
            array('host'=>'SMSFRNDC01GSPR1', 'ip'=>'114.232.129.125', 'type'=>'S', 'os'=>'Windows 2003 Server', 'ram'=>'6144', 'cpucore'=>'7', 'cpufreq'=>'2,38', 'parent'=>'2'),
            array('host'=>'SMSFRNDC01GSPR2', 'ip'=>'238.74.108.197', 'type'=>'S', 'os'=>'Windows 2003 Server', 'ram'=>'3072', 'cpucore'=>'7', 'cpufreq'=>'2,72', 'parent'=>'3'),
            array('host'=>'SMSFRNDC01GSPR3', 'ip'=>'93.120.88.234', 'type'=>'S', 'os'=>'Windows 2003 Server', 'ram'=>'2048', 'cpucore'=>'6', 'cpufreq'=>'2,63', 'parent'=>'4'),
            array('host'=>'SMSFRNDC01GSPR4', 'ip'=>'3.118.31.48', 'type'=>'S', 'os'=>'Windows 2003 Server', 'ram'=>'1024', 'cpucore'=>'3', 'cpufreq'=>'1,97', 'parent'=>'5'),
            array('host'=>'VMSFRNDC01GSGW1', 'ip'=>'68.97.48.32', 'type'=>'V', 'os'=>'Windows 2003 Server', 'ram'=>'8192', 'cpucore'=>'8', 'cpufreq'=>'0,35', 'parent'=>'6'),
            array('host'=>'VMSFRNDC01GSGW2', 'ip'=>'42.107.108.44', 'type'=>'V', 'os'=>'Windows 2003 Server', 'ram'=>'6144', 'cpucore'=>'2', 'cpufreq'=>'2,15', 'parent'=>'1'),
            array('host'=>'SIGSCLUSTPR', 'ip'=>'136.159.154.127', 'type'=>'C', 'os'=>'Windows 2003 Server', 'ram'=>'1024', 'cpucore'=>'1', 'cpufreq'=>'2,36', 'parent'=>'2'),
            array('host'=>'SAXFRNDC01SIPR1', 'ip'=>'84.231.8.129', 'type'=>'S', 'os'=>'Windows 2003 Server', 'ram'=>'1024', 'cpucore'=>'2', 'cpufreq'=>'1,11', 'parent'=>'3'),
            array('host'=>'SAXFRNDC01SIPR2', 'ip'=>'171.8.9.107', 'type'=>'S', 'os'=>'Windows 2003 Server', 'ram'=>'3072', 'cpucore'=>'3', 'cpufreq'=>'2,64', 'parent'=>'4'),
            array('host'=>'SAXFRNDC01SIPR3', 'ip'=>'33.125.157.64', 'type'=>'S', 'os'=>'Windows 2003 Server', 'ram'=>'5120', 'cpucore'=>'1', 'cpufreq'=>'1,81', 'parent'=>'5'),
            array('host'=>'SMSFRNDC01ORAP7', 'ip'=>'25.106.112.78', 'type'=>'S', 'os'=>'Windows 2003 Server', 'ram'=>'8192', 'cpucore'=>'6', 'cpufreq'=>'1,22', 'parent'=>'6'),
            array('host'=>'VMSFRNDC01SIFS1', 'ip'=>'82.102.52.96', 'type'=>'V', 'os'=>'Windows 2003 Server', 'ram'=>'5120', 'cpucore'=>'7', 'cpufreq'=>'0,88', 'parent'=>'1')
        );
    
    
        foreach($hosts as $h){
            $host = new Host();
            $host->setHostname($h['host']);
            $host->setIP($h['ip']);
            $host->setType($h['type']);
            $host->setOS($h['os']);
            $host->setRam($h['ram']);
            $host->setCpuCore($h['cpucore']);
            $host->setCpuFrequency($h['cpufreq']);
            $host->setParent($h['parent']);

            $manager->persist($host);
            $manager->flush();
        }
    }
}
