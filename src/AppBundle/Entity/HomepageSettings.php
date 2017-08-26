<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HomepageSettings
 *
 * @ORM\Table(name="homepage_settings")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HomepageSettingsRepository")
 */
class HomepageSettings
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
     * @var \DateTime @ORM\Column(name="timestamp", type="datetimetz")
     */
    private $timestamp;

    /**
     *
     * @var string @ORM\Column(name="user", type="string", length=255)
     */
    private $user;

    /**
     *
     * @var Recipe @ORM\OneToOne(targetEntity="Recipe")
     */
    private $main_recipe;

    /**
     *
     * @var bool @ORM\Column(name="main_recipe_use_latest", type="boolean")
     */
    private $main_recipe_use_latest = true;

    /**
     *
     * @var Recipe @ORM\OneToOne(targetEntity="Recipe")
     */
    private $feature_one;

    /**
     *
     * @var Recipe @ORM\OneToOne(targetEntity="Recipe")
     */
    private $feature_two;

    /**
     *
     * @var Recipe @ORM\OneToOne(targetEntity="Recipe")
     */
    private $feature_three;

    /**
     *
     * @var Recipe @ORM\OneToOne(targetEntity="Recipe")
     */
    private $feature_four;

    /**
     *
     * @var boolean @ORM\Column(name="feature_recipes_use_latest", type="boolean")
     */
    private $feature_recipes_use_latest = true;

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
     * Set timestamp
     *
     * @param \DateTime $timestamp
     *
     * @return HomepageSettings
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        
        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return HomepageSettings
     */
    public function setUser($user)
    {
        $this->user = $user;
        
        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     *
     * @return the $main_recipe
     */
    public function getMainRecipe()
    {
        return $this->main_recipe;
    }

    /**
     *
     * @return the $feature_one
     */
    public function getFeatureOne()
    {
        return $this->feature_one;
    }

    /**
     *
     * @return the $feature_two
     */
    public function getFeatureTwo()
    {
        return $this->feature_two;
    }

    /**
     *
     * @return the $feature_three
     */
    public function getFeatureThree()
    {
        return $this->feature_three;
    }

    /**
     *
     * @return the $feature_four
     */
    public function getFeatureFour()
    {
        return $this->feature_four;
    }

    /**
     *
     * @param \AppBundle\Entity\Recipe $main_recipe
     */
    public function setMainRecipe($main_recipe)
    {
        $this->main_recipe = $main_recipe;
        
        return $this;
    }

    /**
     *
     * @param \AppBundle\Entity\Recipe $feature_one
     */
    public function setFeatureOne($feature_one)
    {
        $this->feature_one = $feature_one;
        
        return $this;
    }

    /**
     *
     * @param \AppBundle\Entity\Recipe $feature_two
     */
    public function setFeatureTwo($feature_two)
    {
        $this->feature_two = $feature_two;
        
        return $this;
    }

    /**
     *
     * @param \AppBundle\Entity\Recipe $feature_three
     */
    public function setFeatureThree($feature_three)
    {
        $this->feature_three = $feature_three;
        
        return $this;
    }

    /**
     *
     * @param \AppBundle\Entity\Recipe $feature_four
     */
    public function setFeatureFour($feature_four)
    {
        $this->feature_four = $feature_four;
        
        return $this;
    }

    /**
     *
     * @return the $main_recipe_use_latest
     */
    public function getMainRecipeUseLatest()
    {
        return $this->main_recipe_use_latest;
    }

    /**
     *
     * @return the $feature_recipes_use_latest
     */
    public function getFeatureRecipesUseLatest()
    {
        return $this->feature_recipes_use_latest;
    }

    /**
     *
     * @param boolean $main_recipe_use_latest
     */
    public function setMainRecipeUseLatest($main_recipe_use_latest)
    {
        $this->main_recipe_use_latest = $main_recipe_use_latest;
        
        return $this;
    }

    /**
     *
     * @param boolean $feature_recipes_use_latest
     */
    public function setFeatureRecipesUseLatest($feature_recipes_use_latest)
    {
        $this->feature_recipes_use_latest = $feature_recipes_use_latest;
        
        return $this;
    }
}

