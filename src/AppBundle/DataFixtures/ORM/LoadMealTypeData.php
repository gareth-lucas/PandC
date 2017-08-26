<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\MealType;

class LoadMealTypeData implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $names = [
            "Snack",
            "Breakfast",
            "Lunch",
            "Dinner",
            "Brunch",
            "Dessert",
            "Drink"
        ];
        
        foreach ($names as $name) {
            $mealType = new MealType();
            $mealType->setName($name);
            $manager->persist($mealType);
        }
        
        $manager->flush();
    }
}