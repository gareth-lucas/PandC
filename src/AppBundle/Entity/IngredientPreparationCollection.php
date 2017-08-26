<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * IngredientPreparationCollection
 *
 * @ORM\Table(name="ingredient_preparation_collection")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IngredientPreparationCollectionRepository")
 */
class IngredientPreparationCollection
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
     * @var ArrayCollection
     * @ORM\ManyToMany(targetEntity="IngredientPreparation", cascade={"persist"})
     */
    private $ingredientPreparations;
    
    /**
     * @var Recipe
     * @ORM\OneToOne(targetEntity="Recipe", mappedBy="ingredientPreparationCollection")
     */
    private $recipe;

    /**
     * constructor
     */
    public function __construct() {
        $this->ingredientPreparations = new ArrayCollection();
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
     * Add ingredientPreparation
     *
     * @param \AppBundle\Entity\IngredientPreparation $ingredientPreparation
     *
     * @return IngredientPreparationCollection
     */
    public function addIngredientPreparation(\AppBundle\Entity\IngredientPreparation $ingredientPreparation)
    {
        $this->ingredientPreparations[] = $ingredientPreparation;
        $ingredientPreparation->setIngredientPreparationCollection($this);

        return $this;
    }

    /**
     * Remove ingredientPreparation
     *
     * @param \AppBundle\Entity\IngredientPreparation $ingredientPreparation
     */
    public function removeIngredientPreparation(\AppBundle\Entity\IngredientPreparation $ingredientPreparation)
    {
        $this->ingredientPreparations->removeElement($ingredientPreparation);
    }

    /**
     * Get ingredientPreparation
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getIngredientPreparations()
    {
        return $this->ingredientPreparations->toArray();
    }

    /**
     * Set recipe
     *
     * @param \AppBundle\Entity\Recipe $recipe
     *
     * @return IngredientPreparationCollection
     */
    public function setRecipe(\AppBundle\Entity\Recipe $recipe = null)
    {
        $this->recipe = $recipe;

        return $this;
    }

    /**
     * Get recipe
     *
     * @return \AppBundle\Entity\Recipe
     */
    public function getRecipe()
    {
        return $this->recipe;
    }
}
