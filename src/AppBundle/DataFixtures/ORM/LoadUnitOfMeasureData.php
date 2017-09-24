<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\UnitOfMeasure;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadUnitOfMeasureData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $names = [
            [
                'name' => 'Teaspoon',
                'abbreviation' => 'TSP'
            ],
            [
                'name' => 'Tablespoon',
                'abbreviation' => 'TBSP'
            ],
            [
                'name' => 'Litre',
                'abbreviation' => 'LITRE'
            ],
            [
                'name' => 'Litres',
                'abbreviation' => 'LITRES'
            ],
            [
                'name' => 'Millilitres',
                'abbreviation' => 'MILLILITRES'
            ],
            [
                'name' => 'Pint',
                'abbreviation' => 'PINT'
            ],
            [
                'name' => 'Pints',
                'abbreviation' => 'PINTS'
            ],
            [
                'name' => 'Cup',
                'abbreviation' => 'CUP'
            ],
            [
                'name' => 'Cups',
                'abbreviation' => 'CUPS'
            ],
            [
                'name' => 'To Taste',
                'abbreviation' => 'TO TASTE'
            ],
            [
                'name' => 'Piece',
                'abbreviation' => 'PIECE'
            ],
            [
                'name' => 'Pieces',
                'abbreviation' => 'PIECES'
            ],
            [
                'name' => 'Grammes',
                'abbreviation' => 'GRAMMES'
            ],
            [
                'name' => 'Clove',
                'abbreviation' => 'CLOVE'
            ],
            [
                'name' => 'Cloves',
                'abbreviation' => 'CLOVES'
            ],
            [
                'name' => 'Slice',
                'abbreviation' => 'SLICE'
            ],
            [
                'name' => 'Slices',
                'abbreviation' => 'SLICES'
            ],
            [
                'name' => 'Bunch',
                'abbreviation' => 'BUNCH'
            ],
            [
                'name' => 'Leaf',
                'abbreviation' => 'LEAF'
            ],
            [
                'name' => 'Leaves',
                'abbreviation' => 'LEAVES'
            ],
            [
                'name' => 'Fillet',
                'abbreviation' => 'FILLET'
            ],
            [
                'name' => 'Fillets',
                'abbreviation' => 'FILLETS'
            ],
            [
                'name' => 'Glass',
                'abbreviation' => 'GLASS'
            ],
            [
                'name' => 'Kilogram',
                'abbreviation' => 'KG'
            ],
            [
                'name' => 'Sprig',
                'abbreviation' => 'SPRIG'
            ],
            [
                'name' => 'For Decoration',
                'abbreviation' => 'FOR DECORATION'
            ],
            [
                'name' => 'Sprigs',
                'abbreviation' => 'SPRIGS'
            ]
        ];
        
        foreach ($names as $i => $name) {
            $uom = new UnitOfMeasure();
            $uom->setName($name['name']);
            $uom->setAbbreviation($name['abbreviation']);
            $manager->persist($uom);
            $this->addReference("uom-".strtolower(str_replace(" ", "-", $uom->getAbbreviation())), $uom);
        }
        
        $manager->flush();
    }
    /**
     * {@inheritDoc}
     * @see \Doctrine\Common\DataFixtures\OrderedFixtureInterface::getOrder()
     */
    public function getOrder()
    {
        return 2;
        
    }

    
    
}