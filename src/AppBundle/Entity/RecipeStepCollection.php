<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * RecipeStepCollection
 *
 * @ORM\Table(name="recipe_step_collection")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RecipeStepCollectionRepository")
 */
class RecipeStepCollection
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
     * @ORM\OneToMany(targetEntity="RecipeStep", mappedBy="recipeStepCollection")
     */
    private $recipeSteps;
    
    public function __construct() {
        $this->recipeSteps = new ArrayCollection();
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
     * @return the $recipeSteps
     */
    public function getRecipeSteps()
    {
        return $this->recipeSteps;
    }

    /**
     * @param RecipeStep $recipeStep
     */
    public function addRecipeStep(RecipeStep $recipeStep)
    {
        $this->recipeSteps->add($recipeStep);
        $recipeStep->setRecipeStepCollection($this);
        
        return $this;
    }
    
    /**
     * @param RecipeStep $recipeStep
     */
    public function removeRecipeStep(RecipeStep $recipeStep) {
        $this->recipeSteps->removeElement($recipeStep);
        
        return $this;
    }

    
    
}

