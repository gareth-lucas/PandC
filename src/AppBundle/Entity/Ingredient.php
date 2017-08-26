<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Ingredient
 *
 * @ORM\Table(name="ingredient")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IngredientRepository")
 */
class Ingredient
{

    /**
     *
     * @var int @ORM\Column(name="id", type="integer")
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @var string @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;
    
    /**
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(length=128, unique=true)
     */
    private $slug;

    /**
     *
     * @var string @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     *
     * @var ArrayCollection
     * @ORM\ManyToMany(targetEntity="Recipe", mappedBy="ingredients");
     */
    private $recipes;

    /**
     *
     * @var ImageCollection 
     * @ORM\ManyToOne(targetEntity="ImageCollection", cascade={"persist"})
     */
    private $imageCollection;

    public function __construct()
    {
        $this->ingredientPreparations = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return Ingredient
     */
    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *
     * @return the $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Set ingredientPreparations
     *
     * @param \AppBundle\Entity\IngredientPreparation $ingredientPreparations
     *
     * @return Ingredient
     */
    public function setIngredientPreparations(\AppBundle\Entity\IngredientPreparation $ingredientPreparations = null)
    {
        $this->ingredientPreparations = $ingredientPreparations;
        
        return $this;
    }

    /**
     * Get ingredientPreparations
     *
     * @return \AppBundle\Entity\IngredientPreparation
     */
    public function getIngredientPreparations()
    {
        return $this->ingredientPreparations;
    }

    /**
     * Set recipes
     *
     * @param \AppBundle\Entity\Recipe $recipes
     *
     * @return Ingredient
     */
    public function setRecipes(\AppBundle\Entity\Recipe $recipes = null)
    {
        $this->recipes = $recipes;
        
        return $this;
    }

    /**
     * Get recipes
     *
     * @return \AppBundle\Entity\Recipe
     */
    public function getRecipes()
    {
        return $this->recipes;
    }

    /**
     * Add ingredientPreparation
     *
     * @param \AppBundle\Entity\IngredientPreparation $ingredientPreparation
     *
     * @return Ingredient
     */
    public function addIngredientPreparation(\AppBundle\Entity\IngredientPreparation $ingredientPreparation)
    {
        $this->ingredientPreparations[] = $ingredientPreparation;
        
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
     * Add recipe
     *
     * @param \AppBundle\Entity\Recipe $recipe
     *
     * @return Ingredient
     */
    public function addRecipe(\AppBundle\Entity\Recipe $recipe)
    {
        $this->recipes[] = $recipe;
        
        return $this;
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

    public function setImageCollection($imageCollection)
    {
        $this->imageCollection = $imageCollection;
        return $this;
    }
    
    public function unsetImageCollection() {
        unset($this->imageCollection);
        
        return $this;
    }

    public function getImageCollection()
    {
        return $this->imageCollection;
    }
    
    
    
    /**
     * @return the $slug
     */
    public function getSlug()
    {
        return $this->slug;
    }

    public function __toString() {
        return $this->name;
    }
}
