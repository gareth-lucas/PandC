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
            "Sliced",
            "Diced",
            "Chopped",
            "Grated",
            "Boiled",
            "Fried",
            "Shredded",
            "Roasted",
            "Grilled",
            "Cleaned",
            "Boned",
            "Peeled"
        ];
        
        foreach ($names as $name) {
            $preparation = new Preparation();
            $preparation->setName($name);
            $manager->persist($preparation);
        }
        
        $manager->flush();
    }
}