<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Entity\Image;

/**
 * ImageCollection
 *
 * @ORM\Table(name="image_collection")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ImageCollectionRepository")
 */
class ImageCollection
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
     * 
     * @ORM\ManyToMany(targetEntity="Image", inversedBy="imageCollections", cascade={"persist"})
     */
    private $images;
    
    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Recipe", mappedBy="imageCollection");
     */
    private $recipes;
    
    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Ingredient", mappedBy="imageCollection");
     */
    private $ingredients;
    
    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="RecipeStep", mappedBy="imageCollection");
     */
    private $recipeSteps;
    
    public function __construct() {
        $this->images = new ArrayCollection();
        $this->recipes = new ArrayCollection();
        $this->ingredients = new ArrayCollection();
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

    public function addImage(Image $image): ImageCollection {
        $this->images->add($image);
        return $this;
    }
    
    public function getImages(): array {
        return $this->images->toArray();
    }
    
    public function removeImage(Image $image): ImageCollection {
        $this->images->removeElement($image);
        return $this;
    }
    
    public function addRecipe(Recipe $recipe) {
        $this->recipes->add($recipe);
        return $this;
    }
    
    public function removeRecipe(Recipe $recipe) {
        $this->recipes->removeElement($recipe);
        return $this;
    }
    
    public function getRecipes() {
        return $this->recipes->toArray();
    }
    
    public function addIngredient(Ingredient $ingredient) {
        $this->ingredients->add($ingredient);
        return $this;
    }
    
    public function removeIngredient(Ingredient $ingredient) {
        $this->ingredients->removeElement($ingredient);
        return $this;
    }
    
    public function getIngredients() {
        return $this->ingredients->toArray();
    }
    
    public function addRecipeStep(RecipeStep $recipeStep) {
        $this->recipeSteps->add($recipeStep);
        return $this;
    }
    
    public function removeRecipeStep(RecipeStep $recipeStep) {
        $this->recipeSteps->removeElement($recipeStep);
        return $this;
    }
    
    public function getRecipeSteps() {
        return $this->recipeSteps->toArray();
    }
}

