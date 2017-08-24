<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Recipe
 *
 * @ORM\Table(name="recipe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RecipeRepository")
 */
class Recipe
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
     * @var string @ORM\Column(name="title", type="string", length=255, unique=true)
     */
    private $title;

    /**
     *
     * @var string @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     *
     * @var \DateTime @ORM\Column(name="preparation_time", type="time", nullable=true)
     */
    private $preparationTime;

    /**
     *
     * @var \DateTime @ORM\Column(name="cooking_time", type="time", nullable=true)
     */
    private $cookingTime;

    /**
     *
     * @var \DateTime @ORM\Column(name="creation_date", type="date")
     */
    private $creationDate;
    
    /**
     *
     * @var string 
     * @ORM\Column(name="uploaded_by", type="string")
     */
    private $uploadedBy;

    /**
     *
     * @var IngredientPreparationCollection
     * @ORM\OneToOne(targetEntity="IngredientPreparationCollection", inversedBy="recipe")
     */
    private $ingredientPreparationCollection;

    /**
     *
     * @var ArrayCollection 
     * @ORM\ManyToMany(targetEntity="Ingredient", inversedBy="recipes")
     */
    private $ingredients;
    
    /**
     * @var RecipeStepCollection
     * @ORM\OneToOne(targetEntity="RecipeStepCollection")
     */
    private $recipeStepCollection;
    
    /**
     * @var ImageCollection
     * @ORM\OneToOne(targetEntity="ImageCollection");
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
     * Set title
     *
     * @param string $title
     *
     * @return Recipe
     */
    public function setTitle($title)
    {
        $this->title = $title;
        
        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Recipe
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
     * Set preparationTime
     *
     * @param \DateTime $preparationTime
     *
     * @return Recipe
     */
    public function setPreparationTime($preparationTime)
    {
        $this->preparationTime = $preparationTime;
        
        return $this;
    }

    /**
     * Get preparationTime
     *
     * @return \DateTime
     */
    public function getPreparationTime()
    {
        return $this->preparationTime;
    }

    /**
     * Set cookingTime
     *
     * @param \DateTime $cookingTime
     *
     * @return Recipe
     */
    public function setCookingTime($cookingTime)
    {
        $this->cookingTime = $cookingTime;
        
        return $this;
    }

    /**
     * Get cookingTime
     *
     * @return \DateTime
     */
    public function getCookingTime()
    {
        return $this->cookingTime;
    }

    /**
     *
     * @return the $creation_date
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     *
     * @param \DateTime $creation_date
     */
    public function setCreationDate(\DateTime $creation_date)
    {
        $this->creationDate = $creation_date;
    }

    /**
     * Set ingredientPreparationList
     *
     * @param \AppBundle\Entity\IngredientPreparationCollection $ingredientPreparationCollection
     *
     * @return Recipe
     */
    public function setIngredientPreparationCollection(\AppBundle\Entity\IngredientPreparationCollection $ingredientPreparationCollection = null)
    {
        $this->ingredientPreparationCollection = $ingredientPreparationCollection;
        $ingredientPreparationCollection->setRecipe($this);
        
        foreach ($ingredientPreparationCollection->getIngredientPreparation() as $ingredientPreparation) {
            $this->ingredients->add($ingredientPreparation->getIngredient());
        }
        
        return $this;
    }

    /**
     * Get ingredientPreparationList
     *
     * @return \AppBundle\Entity\IngredientPreparationCollection
     */
    public function getIngredientPreparationCollection()
    {
        return $this->ingredientPreparationCollection;
    }
    /**
     * @return the $uploadedBy
     */
    public function getUploadedBy()
    {
        return $this->uploadedBy;
    }

    /**
     * @return the $recipeStepCollection
     */
    public function getRecipeStepCollection()
    {
        return $this->recipeStepCollection;
    }

    /**
     * @return the $imageCollection
     */
    public function getImageCollection()
    {
        return $this->imageCollection;
    }

    /**
     * @param string $uploadedBy
     */
    public function setUploadedBy($uploadedBy)
    {
        $this->uploadedBy = $uploadedBy;
        
        return $this;
    }

    /**
     * @param \AppBundle\Entity\RecipeStepCollection $recipeStepCollection
     */
    public function setRecipeStepCollection(RecipeStepCollection $recipeStepCollection)
    {
        $this->recipeStepCollection = $recipeStepCollection;
        $recipeStepCollection->setRecipe($this);
        
        return $this;
    }

    /**
     * @param \AppBundle\Entity\ImageCollection $imageCollection
     */
    public function setImageCollection(ImageCollection $imageCollection)
    {
        $this->imageCollection = $imageCollection;
        
        return $this;
    }

    
    
}
