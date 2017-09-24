<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Preparation;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadPreparationData extends AbstractFixture implements OrderedFixtureInterface
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
            $this->addReference("prep-".strtolower(str_replace(" ", "-", $preparation->getName())), $preparation);
        }
        
        $manager->flush();
    }
    /**
     * {@inheritDoc}
     * @see \Doctrine\Common\DataFixtures\OrderedFixtureInterface::getOrder()
     */
    public function getOrder()
    {
        return 3;
        
    }

    
    
    
}