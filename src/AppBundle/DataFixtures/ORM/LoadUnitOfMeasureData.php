<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\UnitOfMeasure;

class LoadUnitOfMeasureData implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $names = [
            "Teaspoon",
            "Tablespoon",
            "Millilitre",
            "Litre",
            "Centilitre",
            "Grammes",
            "Kilogram",
            "Piece",
            "Clove"
        ];
        $abbreviations = [
            "tsp",
            "tbsp",
            "ml",
            "l",
            "cl",
            "g",
            "kg",
            "piece",
            "clove"
        ];
        
        foreach ($names as $i => $name) {
            $uom = new UnitOfMeasure();
            $uom->setName($name);
            $uom->setAbbreviation($abbreviations[$i]);
            $manager->persist($uom);
        }
        
        $manager->flush();
    }
}