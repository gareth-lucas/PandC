<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecipeStep
 *
 * @ORM\Table(name="recipe_step")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RecipeStepRepository")
 */
class RecipeStep
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
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    
    /**
     * @var RecipeStepCollection
     * @ORM\ManyToOne(targetEntity="RecipeStepCollection", inversedBy="recipeSteps")
     */
    private $recipeStepCollection;
    
    /**
     * @var ImageCollection
     * @ORM\OneToOne(targetEntity="ImageCollection", cascade={"persist"})
     */
    private $imageCollection;


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
     * Set description
     *
     * @param string $description
     *
     * @return RecipeStep
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @return the $recipeStepCollection
     */
    public function getRecipeStepCollection()
    {
        return $this->recipeStepCollection;
    }

    /**
     * @param \AppBundle\Entity\RecipeStepCollection $recipeStepCollection
     */
    public function setRecipeStepCollection(RecipeStepCollection $recipeStepCollection)
    {
        $this->recipeStepCollection = $recipeStepCollection;
        
        return $this;
    }
    /**
     * @return the $imageCollection
     */
    public function getImageCollection()
    {
        return $this->imageCollection;
    }

    /**
     * @param \AppBundle\Entity\ImageCollection $imageCollection
     */
    public function setImageCollection($imageCollection)
    {
        $this->imageCollection = $imageCollection;
        
        return $this;
    }

}

