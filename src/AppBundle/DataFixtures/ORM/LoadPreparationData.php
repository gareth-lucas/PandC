<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Preparation;

class LoadPreparationData implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $names = [
            'WHOLE',
            'GROUND',
            'SLICED',
            'DICED',
            'PEELED',
            'POWDERED',
            'SIEVED',
            'CHOPPED',
            'BOILED',
            'SEPARATED',
            'MELTED',
            'CRUSHED',
            'SMALL',
            'PRECOOKED',
            'DRY',
            'CANNED'
        ];
        
        foreach ($names as $name) {
            $preparation = new Preparation();
            $preparation->setName($name);
            $manager->persist($preparation);
        }
        
        $manager->flush();
    }
}