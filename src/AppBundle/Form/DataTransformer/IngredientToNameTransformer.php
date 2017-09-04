<?php
namespace AppBundle\Form\DataTransformer;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use AppBundle\Entity\Ingredient;

class IngredientToNameTransformer implements DataTransformerInterface
{
    private $em;
    
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    
    /**
     * Transforms an object (Ingredient) to a string.
     *
     * @param  Ingredient|null $ingredient
     * @return string
     */
    public function transform($ingredient)
    {
        if (null === $ingredient) {
            return '';
        }
        
        return $ingredient->getName();
    }
    
    /**
     * Transforms a string to an object (Ingredient).
     *
     * @param  string $ingredientName
     * @return Ingredient|null
     * @throws TransformationFailedException if object (Ingredient) is not found.
     */
    public function reverseTransform($ingredientName)
    {
        // no issue number? It's optional, so that's ok
        if (!$ingredientName) {
            return;
        }
        
        $ingredient = $this->em
        ->getRepository(Ingredient::class)
        ->findOneByName($ingredientName);
        
        if (null === $ingredient) {
            // causes a validation error
            // this message is not shown to the user
            // see the invalid_message option
            throw new TransformationFailedException(sprintf(
                'An ingredient with name "%s" does not exist!',
                $ingredientName
                ));
        }
        
        return $ingredient;
    }
}