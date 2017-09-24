<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\MealType;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadMealTypeData extends AbstractFixture implements OrderedFixtureInterface
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
            $this->addReference("type-".strtolower(str_replace(" ", "-", $mealType->getName())), $mealType);
        }
        
        $manager->flush();
    }
    /**
     * {@inheritDoc}
     * @see \Doctrine\Common\DataFixtures\OrderedFixtureInterface::getOrder()
     */
    public function getOrder()
    {
        return 4;
        
    }

    
    
}