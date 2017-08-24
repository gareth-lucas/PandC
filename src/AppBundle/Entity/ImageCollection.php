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
    
    public function __construct() {
        $this->images = new ArrayCollection();
        //$this->addImage(new Image());
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
}

