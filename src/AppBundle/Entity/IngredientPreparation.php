<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * IngredientPreparation
 *
 * @ORM\Table(name="ingredient_preparation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IngredientPreparationRepository")
 */
class IngredientPreparation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var Ingredient
     * @ORM\ManyToOne(targetEntity="Ingredient")
     */
    private $ingredient;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="string", length=255, nullable=true)
     */
    private $quantity;
    
    /**
     * @var Preparation
     * @ORM\ManyToOne(targetEntity="Preparation")
     */
    private $preparation;
    
    /**
     * @var UnitOfMeasure
     * @ORM\ManyToOne(targetEntity="UnitOfMeasure")
     */
    private $uom;

    public function __construct() {
        $this->recipes = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quantity
     *
     * @param string $quantity
     *
     * @return IngredientPreparation
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set ingredientPreparationCollections
     *
     * @param \AppBundle\Entity\IngredientPreparationCollection $ingredientPreparationCollection
     *
     * @return IngredientPreparation
     */
    public function setIngredientPreparationCollection(\AppBundle\Entity\IngredientPreparationCollection $ingredientPreparationCollection = null)
    {
        $this->ingredientPreparationCollection = $ingredientPreparationCollection;

        return $this;
    }

    /**
     * Get ingredientPreparationCollections
     *
     * @return \AppBundle\Entity\IngredientPreparationCollection
     */
    public function getIngredientPreparationCollections()
    {
        return $this->ingredientPreparationCollections->toArray();
    }

    /**
     * Set recipes
     *
     * @param \AppBundle\Entity\Recipe $recipes
     *
     * @return IngredientPreparation
     */
    public function addRecipe(\AppBundle\Entity\Recipe $recipe = null)
    {
        $this->recipes->add($recipe);

        return $this;
    }

    /**
     * Get recipes
     *
     * @return \AppBundle\Entity\Recipe
     */
    public function getRecipes()
    {
        return $this->recipes->toArray();
    }

    /**
     * Set recipes
     *
     * @param \AppBundle\Entity\Recipe $recipes
     *
     * @return IngredientPreparation
     */
    public function setRecipes(\AppBundle\Entity\Recipe $recipes = null)
    {
        $this->recipes = $recipes;

        return $this;
    }

    /**
     * Set ingredient
     *
     * @param \AppBundle\Entity\Ingredient $ingredient
     *
     * @return IngredientPreparation
     */
    public function setIngredient(\AppBundle\Entity\Ingredient $ingredient = null)
    {
        $this->ingredient = $ingredient;

        return $this;
    }

    /**
     * Get ingredient
     *
     * @return \AppBundle\Entity\Ingredient
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * Set preparation
     *
     * @param \AppBundle\Entity\Preparation $preparation
     *
     * @return IngredientPreparation
     */
    public function setPreparation(\AppBundle\Entity\Preparation $preparation = null)
    {
        $this->preparation = $preparation;

        return $this;
    }

    /**
     * Get preparation
     *
     * @return \AppBundle\Entity\Preparation
     */
    public function getPreparation()
    {
        return $this->preparation;
    }

    /**
     * Remove recipe
     *
     * @param \AppBundle\Entity\Recipe $recipe
     */
    public function removeRecipe(\AppBundle\Entity\Recipe $recipe)
    {
        $this->recipes->removeElement($recipe);
    }
    /**
     * @return the $uom
     */
    public function getUom()
    {
        return $this->uom;
    }

    /**
     * @param \AppBundle\Entity\UnitOfMeasure $uom
     */
    public function setUom(UnitOfMeasure $uom)
    {
        $this->uom = $uom;
        
        return $this;
    }

    
    
}
