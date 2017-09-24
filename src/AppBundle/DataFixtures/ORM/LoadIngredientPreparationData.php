<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Ingredient;
use AppBundle\Entity\UnitOfMeasure;
use AppBundle\Entity\IngredientPreparation;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadIngredientPreparationData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $ips = [
            [
                'name' => 'onion',
                'quantity' => '1',
                'uom' => '',
                'preparation' => 'CHOPPED',
                'receipe' => '1'
            ],
            [
                'name' => 'oyster mushrooms',
                'quantity' => '200',
                'uom' => 'GRAMMES',
                'preparation' => 'SLICED',
                'receipe' => '1'
            ],
            [
                'name' => 'noodles',
                'quantity' => '120',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '1'
            ],
            [
                'name' => 'vegetable stock',
                'quantity' => '1.5',
                'uom' => 'LITRE',
                'preparation' => 'BOILED',
                'receipe' => '1'
            ],
            [
                'name' => 'fresh parsley',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => 'CHOPPED',
                'receipe' => '1'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '1'
            ],
            [
                'name' => 'black pepper',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => 'GROUND',
                'receipe' => '1'
            ],
            [
                'name' => 'extravergine olive oil',
                'quantity' => '3',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '1'
            ],
            [
                'name' => 'flour',
                'quantity' => '150',
                'uom' => 'GRAMMES',
                'preparation' => 'SIEVED',
                'receipe' => '2'
            ],
            [
                'name' => 'cocoa',
                'quantity' => '25',
                'uom' => 'GRAMMES',
                'preparation' => 'POWDERED',
                'receipe' => '2'
            ],
            [
                'name' => 'sugar',
                'quantity' => '80',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '2'
            ],
            [
                'name' => 'yeast',
                'quantity' => '12',
                'uom' => 'GRAMMES',
                'preparation' => 'POWDERED',
                'receipe' => '2'
            ],
            [
                'name' => 'vegetable oil',
                'quantity' => '3',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '2'
            ],
            [
                'name' => 'veal\'s thick rib',
                'quantity' => '1000',
                'uom' => 'GRAMMES',
                'preparation' => 'WHOLE',
                'receipe' => '3'
            ],
            [
                'name' => 'chestnuts',
                'quantity' => '400',
                'uom' => 'GRAMMES',
                'preparation' => 'WHOLE',
                'receipe' => '3'
            ],
            [
                'name' => 'carrot',
                'quantity' => '1',
                'uom' => 'PIECE',
                'preparation' => 'CHOPPED',
                'receipe' => '3'
            ],
            [
                'name' => 'truffle paste',
                'quantity' => '1',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '3'
            ],
            [
                'name' => 'butter',
                'quantity' => '25',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '3'
            ],
            [
                'name' => 'milk',
                'quantity' => '400',
                'uom' => 'MILLILITRES',
                'preparation' => '',
                'receipe' => '3'
            ],
            [
                'name' => 'red potatoes',
                'quantity' => '500',
                'uom' => 'GRAMMES',
                'preparation' => 'DICED',
                'receipe' => '4'
            ],
            [
                'name' => 'marjoram',
                'quantity' => '1',
                'uom' => 'TSP',
                'preparation' => 'CHOPPED',
                'receipe' => '4'
            ],
            [
                'name' => 'cumin',
                'quantity' => '1',
                'uom' => 'TSP',
                'preparation' => 'GROUND',
                'receipe' => '4'
            ],
            [
                'name' => 'garlic',
                'quantity' => '1',
                'uom' => 'CLOVE',
                'preparation' => 'CHOPPED',
                'receipe' => '4'
            ],
            [
                'name' => 'flour',
                'quantity' => '130',
                'uom' => 'GRAMMES',
                'preparation' => 'SIEVED',
                'receipe' => '5'
            ],
            [
                'name' => 'eggs',
                'quantity' => '3',
                'uom' => 'PIECES',
                'preparation' => 'SEPARATED',
                'receipe' => '5'
            ],
            [
                'name' => 'butter',
                'quantity' => '1',
                'uom' => 'TBSP',
                'preparation' => 'MELTED',
                'receipe' => '5'
            ],
            [
                'name' => 'milk',
                'quantity' => '350',
                'uom' => 'MILLILITRES',
                'preparation' => '',
                'receipe' => '5'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '5'
            ],
            [
                'name' => 'red caviar',
                'quantity' => '140',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '5'
            ],
            [
                'name' => 'orecchiette',
                'quantity' => '450',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '6'
            ],
            [
                'name' => 'turnip greens',
                'quantity' => '500',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '6'
            ],
            [
                'name' => 'anchovies in oil',
                'quantity' => '8',
                'uom' => 'FILLETS',
                'preparation' => '',
                'receipe' => '6'
            ],
            [
                'name' => 'coarse salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '6'
            ],
            [
                'name' => 'extravergine olive oil',
                'quantity' => '4',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '6'
            ],
            [
                'name' => 'chilli pepper',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '6'
            ],
            [
                'name' => 'garlic',
                'quantity' => '1',
                'uom' => 'CLOVE',
                'preparation' => '',
                'receipe' => '6'
            ],
            [
                'name' => 'onion',
                'quantity' => '800',
                'uom' => 'GRAMMES',
                'preparation' => 'SLICED',
                'receipe' => '7'
            ],
            [
                'name' => 'flour',
                'quantity' => '40',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '7'
            ],
            [
                'name' => 'water',
                'quantity' => '1.2',
                'uom' => 'LITRE',
                'preparation' => '',
                'receipe' => '7'
            ],
            [
                'name' => 'emmental',
                'quantity' => '150',
                'uom' => 'GRAMMES',
                'preparation' => 'SLICED',
                'receipe' => '7'
            ],
            [
                'name' => 'extravergine olive oil',
                'quantity' => '',
                'uom' => '',
                'preparation' => '',
                'receipe' => '7'
            ],
            [
                'name' => 'butter',
                'quantity' => '20',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '7'
            ],
            [
                'name' => 'bay leaf',
                'quantity' => '2',
                'uom' => 'LEAVES',
                'preparation' => '',
                'receipe' => '7'
            ],
            [
                'name' => 'french bread',
                'quantity' => '8',
                'uom' => 'SLICES',
                'preparation' => '',
                'receipe' => '7'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '7'
            ],
            [
                'name' => 'celeriac',
                'quantity' => '350',
                'uom' => 'GRAMMES',
                'preparation' => 'CHOPPED',
                'receipe' => '8'
            ],
            [
                'name' => 'carrot',
                'quantity' => '350',
                'uom' => 'GRAMMES',
                'preparation' => 'CHOPPED',
                'receipe' => '8'
            ],
            [
                'name' => 'potatoes',
                'quantity' => '350',
                'uom' => 'GRAMMES',
                'preparation' => 'CHOPPED',
                'receipe' => '8'
            ],
            [
                'name' => 'vegetable stock',
                'quantity' => '1.2',
                'uom' => 'LITRE',
                'preparation' => '',
                'receipe' => '8'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '8'
            ],
            [
                'name' => 'black pepper',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '8'
            ],
            [
                'name' => 'extravergine olive oil',
                'quantity' => '4',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '8'
            ],
            [
                'name' => 'fresh parsley',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => 'CHOPPED',
                'receipe' => '8'
            ],
            [
                'name' => 'round aubergines',
                'quantity' => '4',
                'uom' => 'PIECES',
                'preparation' => '',
                'receipe' => '9'
            ],
            [
                'name' => 'fresh salmon',
                'quantity' => '380',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '9'
            ],
            [
                'name' => 'garlic',
                'quantity' => '2',
                'uom' => 'CLOVES',
                'preparation' => '',
                'receipe' => '9'
            ],
            [
                'name' => 'raisins',
                'quantity' => '40',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '9'
            ],
            [
                'name' => 'capers',
                'quantity' => '40',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '9'
            ],
            [
                'name' => 'pitted green olives',
                'quantity' => '40',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '9'
            ],
            [
                'name' => 'finely chopped plum tomatoes',
                'quantity' => '400',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '9'
            ],
            [
                'name' => 'fresh basil',
                'quantity' => '1',
                'uom' => 'BUNCH',
                'preparation' => '',
                'receipe' => '9'
            ],
            [
                'name' => 'extravergine olive oil',
                'quantity' => '8',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '9'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '9'
            ],
            [
                'name' => 'black pepper',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '9'
            ],
            [
                'name' => 'flour',
                'quantity' => '600',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '10'
            ],
            [
                'name' => 'water',
                'quantity' => '400',
                'uom' => 'MILLILITRES',
                'preparation' => '',
                'receipe' => '10'
            ],
            [
                'name' => 'beer yeast',
                'quantity' => '12',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '10'
            ],
            [
                'name' => 'capers',
                'quantity' => '1',
                'uom' => 'TSP',
                'preparation' => '',
                'receipe' => '10'
            ],
            [
                'name' => 'pitted green olives',
                'quantity' => '100',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '10'
            ],
            [
                'name' => 'rosemary',
                'quantity' => '1',
                'uom' => 'BUNCH',
                'preparation' => 'CHOPPED',
                'receipe' => '10'
            ],
            [
                'name' => 'coarse salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '10'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '15',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '10'
            ],
            [
                'name' => 'sugar',
                'quantity' => '2',
                'uom' => 'TSP',
                'preparation' => '',
                'receipe' => '10'
            ],
            [
                'name' => 'extravergine olive oil',
                'quantity' => '100',
                'uom' => 'MILLILITRES',
                'preparation' => '',
                'receipe' => '10'
            ],
            [
                'name' => 'conchigliette',
                'quantity' => '460',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '11'
            ],
            [
                'name' => 'mushrooms',
                'quantity' => '150',
                'uom' => 'GRAMMES',
                'preparation' => 'CHOPPED',
                'receipe' => '11'
            ],
            [
                'name' => 'mackerel fillets',
                'quantity' => '180',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '11'
            ],
            [
                'name' => 'tomato sauce',
                'quantity' => '200',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '11'
            ],
            [
                'name' => 'dried basil',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '11'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '11'
            ],
            [
                'name' => 'black pepper',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '11'
            ],
            [
                'name' => 'extravergine olive oil',
                'quantity' => '3',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '11'
            ],
            [
                'name' => 'garlic',
                'quantity' => '1',
                'uom' => 'CLOVE',
                'preparation' => 'CRUSHED',
                'receipe' => '11'
            ],
            [
                'name' => 'fresh parsley',
                'quantity' => '2',
                'uom' => 'TBSP',
                'preparation' => 'CHOPPED',
                'receipe' => '12'
            ],
            [
                'name' => 'onion',
                'quantity' => '1',
                'uom' => 'PIECE',
                'preparation' => '',
                'receipe' => '12'
            ],
            [
                'name' => 'garlic',
                'quantity' => '1',
                'uom' => 'CLOVE',
                'preparation' => 'CRUSHED',
                'receipe' => '12'
            ],
            [
                'name' => 'extravergine olive oil',
                'quantity' => '4',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '12'
            ],
            [
                'name' => 'finely chopped plum tomatoes',
                'quantity' => '500',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '12'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '12'
            ],
            [
                'name' => 'black pepper',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '12'
            ],
            [
                'name' => 'bacon in cubes',
                'quantity' => '100',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '12'
            ],
            [
                'name' => 'mozzarella',
                'quantity' => '250',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '12'
            ],
            [
                'name' => 'pecorino',
                'quantity' => '60',
                'uom' => 'GRAMMES',
                'preparation' => 'GROUND',
                'receipe' => '12'
            ],
            [
                'name' => 'bacon in cubes',
                'quantity' => '450',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '12'
            ],
            [
                'name' => 'small onions',
                'quantity' => '500',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '13'
            ],
            [
                'name' => 'bay leaf',
                'quantity' => '3',
                'uom' => 'LEAVES',
                'preparation' => '',
                'receipe' => '13'
            ],
            [
                'name' => 'butter',
                'quantity' => '30',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '13'
            ],
            [
                'name' => 'balsamic vinegar',
                'quantity' => '50',
                'uom' => 'MILLILITRES',
                'preparation' => '',
                'receipe' => '13'
            ],
            [
                'name' => 'sugar',
                'quantity' => '30',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '13'
            ],
            [
                'name' => 'prawns',
                'quantity' => '400',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '14'
            ],
            [
                'name' => 'onion',
                'quantity' => '1',
                'uom' => '',
                'preparation' => '',
                'receipe' => '14'
            ],
            [
                'name' => 'fresh ginger',
                'quantity' => '1',
                'uom' => 'TSP',
                'preparation' => 'CHOPPED',
                'receipe' => '14'
            ],
            [
                'name' => 'sugar',
                'quantity' => '1',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '14'
            ],
            [
                'name' => 'extravergine olive oil',
                'quantity' => '4',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '14'
            ],
            [
                'name' => 'white wine vinegar',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '14'
            ],
            [
                'name' => 'soy sauce',
                'quantity' => '1',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '14'
            ],
            [
                'name' => 'small onions',
                'quantity' => '400',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '15'
            ],
            [
                'name' => 'mushroom caps',
                'quantity' => '200',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '15'
            ],
            [
                'name' => 'balsamic vinegar',
                'quantity' => '1',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '15'
            ],
            [
                'name' => 'sugar',
                'quantity' => '1',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '15'
            ],
            [
                'name' => 'extravergine olive oil',
                'quantity' => '3',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '15'
            ],
            [
                'name' => 'vegetable stock',
                'quantity' => '250',
                'uom' => 'MILLILITRES',
                'preparation' => '',
                'receipe' => '15'
            ],
            [
                'name' => 'bay leaf',
                'quantity' => '2',
                'uom' => 'LEAVES',
                'preparation' => '',
                'receipe' => '15'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '15'
            ],
            [
                'name' => 'black pepper',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '15'
            ],
            [
                'name' => 'aubergine',
                'quantity' => '400',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '16'
            ],
            [
                'name' => 'red pepper',
                'quantity' => '2',
                'uom' => '',
                'preparation' => '',
                'receipe' => '16'
            ],
            [
                'name' => 'yellow pepper',
                'quantity' => '1',
                'uom' => '',
                'preparation' => '',
                'receipe' => '16'
            ],
            [
                'name' => 'onion',
                'quantity' => '1',
                'uom' => '',
                'preparation' => '',
                'receipe' => '16'
            ],
            [
                'name' => 'pickled capers',
                'quantity' => '1',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '16'
            ],
            [
                'name' => 'fresh parsley',
                'quantity' => '1',
                'uom' => 'BUNCH',
                'preparation' => '',
                'receipe' => '16'
            ],
            [
                'name' => 'anchovies in oil',
                'quantity' => '3',
                'uom' => 'FILLETS',
                'preparation' => '',
                'receipe' => '16'
            ],
            [
                'name' => 'extravergine olive oil',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '16'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '16'
            ],
            [
                'name' => 'sage',
                'quantity' => '1',
                'uom' => 'TBSP',
                'preparation' => 'CHOPPED',
                'receipe' => '17'
            ],
            [
                'name' => 'rosemary',
                'quantity' => '1',
                'uom' => 'TBSP',
                'preparation' => 'CHOPPED',
                'receipe' => '17'
            ],
            [
                'name' => 'garlic',
                'quantity' => '2',
                'uom' => 'CLOVES',
                'preparation' => 'CHOPPED',
                'receipe' => '17'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '17'
            ],
            [
                'name' => 'black pepper',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '17'
            ],
            [
                'name' => 'chicken',
                'quantity' => '1',
                'uom' => '',
                'preparation' => 'WHOLE',
                'receipe' => '17'
            ],
            [
                'name' => 'lemon',
                'quantity' => '1',
                'uom' => 'PIECE',
                'preparation' => 'WHOLE',
                'receipe' => '17'
            ],
            [
                'name' => 'extravergine olive oil',
                'quantity' => '5',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '17'
            ],
            [
                'name' => 'green pepper',
                'quantity' => '2',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '18'
            ],
            [
                'name' => 'beef fillets',
                'quantity' => '4',
                'uom' => 'PIECES',
                'preparation' => '',
                'receipe' => '18'
            ],
            [
                'name' => 'butter',
                'quantity' => '30',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '18'
            ],
            [
                'name' => 'extravergine olive oil',
                'quantity' => '4',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '18'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '18'
            ],
            [
                'name' => 'cognac',
                'quantity' => '1/2',
                'uom' => 'GLASS',
                'preparation' => '',
                'receipe' => '18'
            ],
            [
                'name' => 'cream',
                'quantity' => '4',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '18'
            ],
            [
                'name' => 'green beans',
                'quantity' => '450',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '19'
            ],
            [
                'name' => 'butter',
                'quantity' => '50',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '19'
            ],
            [
                'name' => 'fresh parsley',
                'quantity' => '1',
                'uom' => 'TBSP',
                'preparation' => 'CHOPPED',
                'receipe' => '19'
            ],
            [
                'name' => 'lemon juice',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '19'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '19'
            ],
            [
                'name' => 'black pepper',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '19'
            ],
            [
                'name' => 'pork shank pulp',
                'quantity' => '600',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '20'
            ],
            [
                'name' => 'pork shoulder pulp',
                'quantity' => '600',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '20'
            ],
            [
                'name' => 'bacon slices',
                'quantity' => '300',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '20'
            ],
            [
                'name' => 'potatoes',
                'quantity' => '600',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '20'
            ],
            [
                'name' => 'savoy cabbage',
                'quantity' => '300',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '20'
            ],
            [
                'name' => 'onion',
                'quantity' => '1',
                'uom' => '',
                'preparation' => '',
                'receipe' => '20'
            ],
            [
                'name' => 'butter',
                'quantity' => '',
                'uom' => '',
                'preparation' => '',
                'receipe' => '20'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '20'
            ],
            [
                'name' => 'black pepper',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '20'
            ],
            [
                'name' => 'onion',
                'quantity' => '3',
                'uom' => '',
                'preparation' => '',
                'receipe' => '21'
            ],
            [
                'name' => 'vegetable oil',
                'quantity' => '100',
                'uom' => 'MILLILITRES',
                'preparation' => '',
                'receipe' => '21'
            ],
            [
                'name' => 'apple vinegar',
                'quantity' => '1',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '21'
            ],
            [
                'name' => 'sugar',
                'quantity' => '0.5',
                'uom' => 'TSP',
                'preparation' => '',
                'receipe' => '21'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '21'
            ],
            [
                'name' => 'sour cream',
                'quantity' => '3',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '21'
            ],
            [
                'name' => 'fresh parsley',
                'quantity' => '1',
                'uom' => 'TBSP',
                'preparation' => 'CHOPPED',
                'receipe' => '21'
            ],
            [
                'name' => 'couscous',
                'quantity' => '280',
                'uom' => 'GRAMMES',
                'preparation' => 'PRECOOKED',
                'receipe' => '22'
            ],
            [
                'name' => 'red pepper',
                'quantity' => '1',
                'uom' => '',
                'preparation' => '',
                'receipe' => '22'
            ],
            [
                'name' => 'turnip greens',
                'quantity' => '400',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '22'
            ],
            [
                'name' => 'stick of celery',
                'quantity' => '1',
                'uom' => '',
                'preparation' => '',
                'receipe' => '22'
            ],
            [
                'name' => 'cucumber',
                'quantity' => '1',
                'uom' => '',
                'preparation' => '',
                'receipe' => '22'
            ],
            [
                'name' => 'extravergine olive oil',
                'quantity' => '4',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '22'
            ],
            [
                'name' => 'saffron stigmas',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '22'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '22'
            ],
            [
                'name' => 'black pepper',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '22'
            ],
            [
                'name' => 'moscardini',
                'quantity' => '1',
                'uom' => 'KG',
                'preparation' => 'SMALL',
                'receipe' => '23'
            ],
            [
                'name' => 'couscous',
                'quantity' => '320',
                'uom' => 'GRAMMES',
                'preparation' => 'PRECOOKED',
                'receipe' => '23'
            ],
            [
                'name' => 'wild fennel',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '23'
            ],
            [
                'name' => 'garlic',
                'quantity' => '2',
                'uom' => 'CLOVES',
                'preparation' => '',
                'receipe' => '23'
            ],
            [
                'name' => 'chilli powder',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '23'
            ],
            [
                'name' => 'extravergine olive oil',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '23'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '23'
            ],
            [
                'name' => 'couscous',
                'quantity' => '280',
                'uom' => 'GRAMMES',
                'preparation' => 'PRECOOKED',
                'receipe' => '24'
            ],
            [
                'name' => 'chicken breast',
                'quantity' => '250',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '24'
            ],
            [
                'name' => 'lamb meat',
                'quantity' => '200',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '24'
            ],
            [
                'name' => 'tomatoes',
                'quantity' => '600',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '24'
            ],
            [
                'name' => 'aubergine',
                'quantity' => '1',
                'uom' => '',
                'preparation' => '',
                'receipe' => '24'
            ],
            [
                'name' => 'red pepper',
                'quantity' => '1',
                'uom' => '',
                'preparation' => '',
                'receipe' => '24'
            ],
            [
                'name' => 'potatoes',
                'quantity' => '1',
                'uom' => '',
                'preparation' => '',
                'receipe' => '24'
            ],
            [
                'name' => 'courgette',
                'quantity' => '1',
                'uom' => '',
                'preparation' => '',
                'receipe' => '24'
            ],
            [
                'name' => 'onion',
                'quantity' => '1',
                'uom' => '',
                'preparation' => '',
                'receipe' => '24'
            ],
            [
                'name' => 'fresh basil',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '24'
            ],
            [
                'name' => 'garlic',
                'quantity' => '1',
                'uom' => 'CLOVE',
                'preparation' => '',
                'receipe' => '24'
            ],
            [
                'name' => 'white wine',
                'quantity' => '2',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '24'
            ],
            [
                'name' => 'extravergine olive oil',
                'quantity' => '5',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '24'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '24'
            ],
            [
                'name' => 'black pepper',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '24'
            ],
            [
                'name' => 'couscous',
                'quantity' => '250',
                'uom' => 'GRAMMES',
                'preparation' => 'PRECOOKED',
                'receipe' => '25'
            ],
            [
                'name' => 'pepper',
                'quantity' => '6',
                'uom' => '',
                'preparation' => '',
                'receipe' => '25'
            ],
            [
                'name' => 'prawn tails',
                'quantity' => '300',
                'uom' => 'GRAMMES',
                'preparation' => 'PEELED',
                'receipe' => '25'
            ],
            [
                'name' => 'tomatoes',
                'quantity' => '3',
                'uom' => '',
                'preparation' => '',
                'receipe' => '25'
            ],
            [
                'name' => 'fresh parsley',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '25'
            ],
            [
                'name' => 'fresh basil',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '25'
            ],
            [
                'name' => 'vegetable stock',
                'quantity' => '500',
                'uom' => 'MILLILITRES',
                'preparation' => '',
                'receipe' => '25'
            ],
            [
                'name' => 'extravergine olive oil',
                'quantity' => '',
                'uom' => '',
                'preparation' => '',
                'receipe' => '25'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '25'
            ],
            [
                'name' => 'black pepper',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '25'
            ],
            [
                'name' => 'casereccio bread',
                'quantity' => '4',
                'uom' => 'SLICES',
                'preparation' => '',
                'receipe' => '26'
            ],
            [
                'name' => 'aubergine',
                'quantity' => '2',
                'uom' => '',
                'preparation' => '',
                'receipe' => '26'
            ],
            [
                'name' => 'marinated anchovies',
                'quantity' => '100',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '26'
            ],
            [
                'name' => 'salted capers',
                'quantity' => '1',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '26'
            ],
            [
                'name' => 'garlic',
                'quantity' => '1',
                'uom' => 'CLOVE',
                'preparation' => '',
                'receipe' => '26'
            ],
            [
                'name' => 'fresh parsley',
                'quantity' => '1',
                'uom' => 'BUNCH',
                'preparation' => '',
                'receipe' => '26'
            ],
            [
                'name' => 'extravergine olive oil',
                'quantity' => '',
                'uom' => '',
                'preparation' => '',
                'receipe' => '26'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '26'
            ],
            [
                'name' => 'black pepper',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '26'
            ],
            [
                'name' => 'baguette',
                'quantity' => '1',
                'uom' => '',
                'preparation' => '',
                'receipe' => '27'
            ],
            [
                'name' => 'canned beans',
                'quantity' => '250',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '27'
            ],
            [
                'name' => 'carrot',
                'quantity' => '1',
                'uom' => '',
                'preparation' => '',
                'receipe' => '27'
            ],
            [
                'name' => 'cauliflower',
                'quantity' => '120',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '27'
            ],
            [
                'name' => 'red pepper',
                'quantity' => '100',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '27'
            ],
            [
                'name' => 'cucumber',
                'quantity' => '1',
                'uom' => '',
                'preparation' => '',
                'receipe' => '27'
            ],
            [
                'name' => 'fresh chilli pepper',
                'quantity' => '1',
                'uom' => '',
                'preparation' => '',
                'receipe' => '27'
            ],
            [
                'name' => 'garlic',
                'quantity' => '1',
                'uom' => 'CLOVE',
                'preparation' => '',
                'receipe' => '27'
            ],
            [
                'name' => 'rosemary',
                'quantity' => '',
                'uom' => '',
                'preparation' => '',
                'receipe' => '27'
            ],
            [
                'name' => 'fresh parsley',
                'quantity' => '',
                'uom' => '',
                'preparation' => '',
                'receipe' => '27'
            ],
            [
                'name' => 'white wine vinegar',
                'quantity' => '',
                'uom' => '',
                'preparation' => '',
                'receipe' => '27'
            ],
            [
                'name' => 'extravergine olive oil',
                'quantity' => '',
                'uom' => '',
                'preparation' => '',
                'receipe' => '27'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => '',
                'preparation' => '',
                'receipe' => '27'
            ],
            [
                'name' => 'black pepper',
                'quantity' => '',
                'uom' => '',
                'preparation' => '',
                'receipe' => '27'
            ],
            [
                'name' => 'tomatoes',
                'quantity' => '200',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '28'
            ],
            [
                'name' => 'cannellini beans',
                'quantity' => '150',
                'uom' => 'GRAMMES',
                'preparation' => 'DRY',
                'receipe' => '28'
            ],
            [
                'name' => 'onion',
                'quantity' => '2',
                'uom' => '',
                'preparation' => '',
                'receipe' => '28'
            ],
            [
                'name' => 'garlic',
                'quantity' => '2',
                'uom' => 'CLOVE',
                'preparation' => '',
                'receipe' => '28'
            ],
            [
                'name' => 'fresh sage',
                'quantity' => '',
                'uom' => '',
                'preparation' => '',
                'receipe' => '28'
            ],
            [
                'name' => 'bay leaf',
                'quantity' => '',
                'uom' => '',
                'preparation' => '',
                'receipe' => '28'
            ],
            [
                'name' => 'fresh basil',
                'quantity' => '',
                'uom' => '',
                'preparation' => '',
                'receipe' => '28'
            ],
            [
                'name' => 'extravergine olive oil',
                'quantity' => '',
                'uom' => '',
                'preparation' => '',
                'receipe' => '28'
            ],
            [
                'name' => 'coarse salt',
                'quantity' => '',
                'uom' => '',
                'preparation' => '',
                'receipe' => '28'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => '',
                'preparation' => '',
                'receipe' => '28'
            ],
            [
                'name' => 'black pepper',
                'quantity' => '',
                'uom' => '',
                'preparation' => '',
                'receipe' => '28'
            ],
            [
                'name' => 'flour',
                'quantity' => '4',
                'uom' => 'CUPS',
                'preparation' => '',
                'receipe' => '29'
            ],
            [
                'name' => 'milk',
                'quantity' => '2',
                'uom' => 'CUPS',
                'preparation' => '',
                'receipe' => '29'
            ],
            [
                'name' => 'eggs',
                'quantity' => '3',
                'uom' => '',
                'preparation' => '',
                'receipe' => '29'
            ],
            [
                'name' => 'butter',
                'quantity' => '1',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '29'
            ],
            [
                'name' => 'yeast',
                'quantity' => '2',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '29'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '29'
            ],
            [
                'name' => 'butter',
                'quantity' => '4',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '30'
            ],
            [
                'name' => 'anchovies in salt',
                'quantity' => '8',
                'uom' => 'PIECES',
                'preparation' => '',
                'receipe' => '30'
            ],
            [
                'name' => 'hard-boiled egg yolk',
                'quantity' => '2',
                'uom' => 'PIECES',
                'preparation' => '',
                'receipe' => '30'
            ],
            [
                'name' => 'black pepper',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '30'
            ],
            [
                'name' => 'fresh parsley',
                'quantity' => '1',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '30'
            ],
            [
                'name' => 'eggs',
                'quantity' => '4',
                'uom' => '',
                'preparation' => '',
                'receipe' => '31'
            ],
            [
                'name' => 'salmon caviar',
                'quantity' => '4',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '31'
            ],
            [
                'name' => 'fresh parsley',
                'quantity' => '',
                'uom' => 'FOR DECORATION',
                'preparation' => '',
                'receipe' => '31'
            ],
            [
                'name' => 'pearl barley',
                'quantity' => '300',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '32'
            ],
            [
                'name' => 'spring onions',
                'quantity' => '2',
                'uom' => '',
                'preparation' => '',
                'receipe' => '32'
            ],
            [
                'name' => 'red pepper',
                'quantity' => '1',
                'uom' => '',
                'preparation' => '',
                'receipe' => '32'
            ],
            [
                'name' => 'stick of celery',
                'quantity' => '0.5',
                'uom' => '',
                'preparation' => '',
                'receipe' => '32'
            ],
            [
                'name' => 'fresh ginger',
                'quantity' => '1',
                'uom' => 'TSP',
                'preparation' => 'GROUND',
                'receipe' => '32'
            ],
            [
                'name' => 'fresh parsley',
                'quantity' => '1',
                'uom' => 'SPRIG',
                'preparation' => '',
                'receipe' => '32'
            ],
            [
                'name' => 'mint',
                'quantity' => '2',
                'uom' => 'SPRIG',
                'preparation' => '',
                'receipe' => '32'
            ],
            [
                'name' => 'coriander seeds',
                'quantity' => '1',
                'uom' => 'TSP',
                'preparation' => '',
                'receipe' => '32'
            ],
            [
                'name' => 'lemon',
                'quantity' => '1',
                'uom' => '',
                'preparation' => '',
                'receipe' => '32'
            ],
            [
                'name' => 'extravergine olive oil',
                'quantity' => '4',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '32'
            ],
            [
                'name' => 'coarse salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '32'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '32'
            ],
            [
                'name' => 'black pepper',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '32'
            ],
            [
                'name' => 'fillet of red mullet',
                'quantity' => '400',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '33'
            ],
            [
                'name' => 'fresh parsley',
                'quantity' => '1',
                'uom' => 'BUNCH',
                'preparation' => '',
                'receipe' => '33'
            ],
            [
                'name' => 'fresh basil',
                'quantity' => '2',
                'uom' => 'SPRIGS',
                'preparation' => '',
                'receipe' => '33'
            ],
            [
                'name' => 'fresh marjoram',
                'quantity' => '2',
                'uom' => 'SPRIGS',
                'preparation' => '',
                'receipe' => '33'
            ],
            [
                'name' => 'garlic',
                'quantity' => '1',
                'uom' => 'CLOVE',
                'preparation' => '',
                'receipe' => '33'
            ],
            [
                'name' => 'flour',
                'quantity' => '100',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '33'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '33'
            ],
            [
                'name' => 'extravergine olive oil',
                'quantity' => '100',
                'uom' => 'MILLILITRES',
                'preparation' => '',
                'receipe' => '33'
            ],
            [
                'name' => 'lemon',
                'quantity' => '1',
                'uom' => '',
                'preparation' => '',
                'receipe' => '33'
            ],
            [
                'name' => 'anchovies',
                'quantity' => '400',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '34'
            ],
            [
                'name' => 'apple vinegar',
                'quantity' => '250',
                'uom' => 'MILLILITRES',
                'preparation' => '',
                'receipe' => '34'
            ],
            [
                'name' => 'extravergine olive oil',
                'quantity' => '150',
                'uom' => 'MILLILITRES',
                'preparation' => '',
                'receipe' => '34'
            ],
            [
                'name' => 'garlic',
                'quantity' => '2',
                'uom' => 'CLOVES',
                'preparation' => '',
                'receipe' => '34'
            ],
            [
                'name' => 'fresh parsley',
                'quantity' => '1',
                'uom' => 'BUNCH',
                'preparation' => '',
                'receipe' => '34'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '34'
            ],
            [
                'name' => 'chilli pepper',
                'quantity' => '1',
                'uom' => '',
                'preparation' => '',
                'receipe' => '34'
            ],
            [
                'name' => 'black pepper',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '34'
            ],
            [
                'name' => 'borlotti beans',
                'quantity' => '300',
                'uom' => 'GRAMMES',
                'preparation' => 'DRY',
                'receipe' => '35'
            ],
            [
                'name' => 'potatoes',
                'quantity' => '3',
                'uom' => '',
                'preparation' => '',
                'receipe' => '35'
            ],
            [
                'name' => 'onion',
                'quantity' => '1',
                'uom' => '',
                'preparation' => '',
                'receipe' => '35'
            ],
            [
                'name' => 'garlic',
                'quantity' => '1',
                'uom' => 'CLOVE',
                'preparation' => '',
                'receipe' => '35'
            ],
            [
                'name' => 'fresh parsley',
                'quantity' => '1',
                'uom' => 'SPRIG',
                'preparation' => '',
                'receipe' => '35'
            ],
            [
                'name' => 'fenugreek seeds',
                'quantity' => '0.5',
                'uom' => 'TSP',
                'preparation' => 'GROUND',
                'receipe' => '35'
            ],
            [
                'name' => 'coriander seeds',
                'quantity' => '1',
                'uom' => 'TSP',
                'preparation' => 'GROUND',
                'receipe' => '35'
            ],
            [
                'name' => 'chilli powder',
                'quantity' => '0.5',
                'uom' => 'TSP',
                'preparation' => '',
                'receipe' => '35'
            ],
            [
                'name' => 'tomato concentrate',
                'quantity' => '1',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '35'
            ],
            [
                'name' => 'water',
                'quantity' => '1.5',
                'uom' => 'LITRE',
                'preparation' => '',
                'receipe' => '35'
            ],
            [
                'name' => 'vegetable stock',
                'quantity' => '',
                'uom' => '',
                'preparation' => '',
                'receipe' => '35'
            ],
            [
                'name' => 'vegetable oil',
                'quantity' => '',
                'uom' => '',
                'preparation' => '',
                'receipe' => '35'
            ],
            [
                'name' => 'savoy cabbage',
                'quantity' => '250',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '39'
            ],
            [
                'name' => 'onion',
                'quantity' => '1',
                'uom' => '',
                'preparation' => '',
                'receipe' => '39'
            ],
            [
                'name' => 'carrot',
                'quantity' => '200',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '39'
            ],
            [
                'name' => 'potatoes',
                'quantity' => '250',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '39'
            ],
            [
                'name' => 'tomato concentrate',
                'quantity' => '2',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '39'
            ],
            [
                'name' => 'vegetable stock',
                'quantity' => '2',
                'uom' => 'LITRE',
                'preparation' => '',
                'receipe' => '39'
            ],
            [
                'name' => 'extravergine olive oil',
                'quantity' => '3',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '39'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '39'
            ],
            [
                'name' => 'black pepper',
                'quantity' => '42737',
                'uom' => 'TSP',
                'preparation' => '',
                'receipe' => '39'
            ],
            [
                'name' => 'dill ',
                'quantity' => '1',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '39'
            ],
            [
                'name' => 'parsley',
                'quantity' => '1',
                'uom' => 'SPRIG',
                'preparation' => '',
                'receipe' => '39'
            ],
            [
                'name' => 'pork ribs',
                'quantity' => '800',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '40'
            ],
            [
                'name' => 'sweet paprika',
                'quantity' => '1',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '40'
            ],
            [
                'name' => 'garlic',
                'quantity' => '1',
                'uom' => 'CLOVE',
                'preparation' => '',
                'receipe' => '40'
            ],
            [
                'name' => 'apple vinegar',
                'quantity' => '2',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '40'
            ],
            [
                'name' => 'black pepper',
                'quantity' => '42737',
                'uom' => 'TSP',
                'preparation' => '',
                'receipe' => '40'
            ],
            [
                'name' => 'sugar',
                'quantity' => '1',
                'uom' => 'TSP',
                'preparation' => '',
                'receipe' => '40'
            ],
            [
                'name' => 'mustard',
                'quantity' => '1',
                'uom' => 'TSP',
                'preparation' => '',
                'receipe' => '40'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '42737',
                'uom' => 'TSP',
                'preparation' => '',
                'receipe' => '40'
            ],
            [
                'name' => 'onion',
                'quantity' => '42737',
                'uom' => '',
                'preparation' => '',
                'receipe' => '40'
            ],
            [
                'name' => 'extravergine olive oil',
                'quantity' => '4',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '40'
            ],
            [
                'name' => 'green asparagus',
                'quantity' => '12',
                'uom' => 'PIECES',
                'preparation' => '',
                'receipe' => '41'
            ],
            [
                'name' => 'peas',
                'quantity' => '200',
                'uom' => 'GRAMMES',
                'preparation' => '',
                'receipe' => '41'
            ],
            [
                'name' => 'apple granny smith',
                'quantity' => '0.5',
                'uom' => '',
                'preparation' => '',
                'receipe' => '41'
            ],
            [
                'name' => 'fresh parsley',
                'quantity' => '1',
                'uom' => 'SPRIG',
                'preparation' => '',
                'receipe' => '41'
            ],
            [
                'name' => 'spring onions',
                'quantity' => '2',
                'uom' => '',
                'preparation' => '',
                'receipe' => '41'
            ],
            [
                'name' => 'extravergine olive oil',
                'quantity' => '2',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '41'
            ],
            [
                'name' => 'lemon juice',
                'quantity' => '1',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '41'
            ],
            [
                'name' => 'apple vinegar',
                'quantity' => '1',
                'uom' => 'TBSP',
                'preparation' => '',
                'receipe' => '41'
            ],
            [
                'name' => 'rocket',
                'quantity' => '',
                'uom' => '',
                'preparation' => '',
                'receipe' => '41'
            ],
            [
                'name' => 'fine salt',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '41'
            ],
            [
                'name' => 'black pepper',
                'quantity' => '',
                'uom' => 'TO TASTE',
                'preparation' => '',
                'receipe' => '41'
            ]
        ];
        
        $index = 0;
        $recipe = 0;
        foreach ($ips as $inp) {
            if ($inp['receipe'] != $recipe) {
                $index = 0;
            }
            $ip = new IngredientPreparation();
            $ip->setIngredient($this->getReference("ingredient-" . strtolower(str_replace([' ',"'"], ["-",""], $inp['name']))));
            $ip->setQuantity($inp['quantity']);
            if ($inp['uom'] != '') {
                $ip->setUom($this->getReference("uom-" . strtolower(str_replace(" ", "-", $inp['uom']))));
            }
            if ($inp['preparation'] != "") {
                $ip->setPreparation($this->getReference("prep-" . strtolower(str_replace(" ", "-", $inp['preparation']))));
            }
            
            $manager->persist($ip);
            $this->addReference("ip-" . $inp['receipe'] . "-" . $index, $ip);
            $index ++;
            $recipe = $inp['receipe'];
        }
        
        $manager->flush();
    }

    /**
     *
     * {@inheritdoc}
     * @see \Doctrine\Common\DataFixtures\OrderedFixtureInterface::getOrder()
     */
    public function getOrder()
    {
        return 10;
    }
}