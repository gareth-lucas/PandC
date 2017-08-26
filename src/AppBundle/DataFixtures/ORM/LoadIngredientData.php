<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Ingredient;
use AppBundle\Entity\UnitOfMeasure;

class LoadIngredientData implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $names = [
            "Cheese",
            "Egg",
            "Ham",
            "Onion",
            "Garlic",
            "Beef",
            "Fish",
            "Potato",
            "Carrot"
        ];
        
        foreach ($names as $i => $name) {
            $ingredient = new Ingredient();
            $ingredient->setName($name);
            $manager->persist($ingredient);
        }
        
        $manager->flush();
    }
}