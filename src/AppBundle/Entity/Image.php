<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Entity\ImageCollection;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ImageRepository")
 */
class Image
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
     * @var string @ORM\Column(name="image_caption", type="string", length=255)
     */
    private $imageCaption;

    /**
     *
     * @var string @ORM\Column(name="image_copyright", type="string", length=255, nullable=true)
     */
    private $imageCopyright;

    /**
     *
     * @var string @ORM\Column(name="image_format", type="string", length=255)
     */
    private $imageFormat;

    /**
     *
     * @var string @ORM\Column(name="image_size", type="string", length=255)
     */
    private $imageSize;

    /**
     *
     * @var string @ORM\Column(name="image_filepath", type="string", length=255)
     */
    private $imageFilepath;
    
    /**
     * @var File
     */
    private $image;

    /**
     *
     * @var ArrayCollection @ORM\ManyToMany(targetEntity="ImageCollection", mappedBy="images", cascade={"persist"})
     */
    private $imageCollections;

    public function __construct()
    {
        $this->imageCollections = new ArrayCollection();
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
     * Set imageCaption
     *
     * @param string $imageCaption
     *
     * @return Image
     */
    public function setImageCaption($imageCaption)
    {
        $this->imageCaption = $imageCaption;
        
        return $this;
    }

    /**
     * Get imageCaption
     *
     * @return string
     */
    public function getImageCaption()
    {
        return $this->imageCaption;
    }

    /**
     * Set imageCopyright
     *
     * @param string $imageCopyright
     *
     * @return Image
     */
    public function setImageCopyright($imageCopyright)
    {
        $this->imageCopyright = $imageCopyright;
        
        return $this;
    }

    /**
     * Get imageCopyright
     *
     * @return string
     */
    public function getImageCopyright()
    {
        return $this->imageCopyright;
    }

    /**
     * Set imageFormat
     *
     * @param string $imageFormat
     *
     * @return Image
     */
    public function setImageFormat($imageFormat)
    {
        $this->imageFormat = $imageFormat;
        
        return $this;
    }

    /**
     * Get imageFormat
     *
     * @return string
     */
    public function getImageFormat()
    {
        return $this->imageFormat;
    }

    /**
     * Set imageSize
     *
     * @param string $imageSize
     *
     * @return Image
     */
    public function setImageSize($imageSize)
    {
        $this->imageSize = $imageSize;
        
        return $this;
    }

    /**
     * Get imageSize
     *
     * @return string
     */
    public function getImageSize()
    {
        return $this->imageSize;
    }

    /**
     * Set imageFilepath
     *
     * @param string $imageFilepath
     *
     * @return Image
     */
    public function setImageFilepath($imageFilepath)
    {
        $this->imageFilepath = $imageFilepath;
        
        return $this;
    }

    /**
     * Get imageFilepath
     *
     * @return string
     */
    public function getImageFilepath()
    {
        return $this->imageFilepath;
    }

    public function addImageCollection(ImageCollection $imageCollection): Image
    {
        $this->imageCollections->add($imageCollection);
        return $this;
    }

    public function getImageCollections(): array
    {
        return $this->imageCollections->toArray();
    }

    public function removeImageCollection(ImageCollection $imageCollection): Image
    {
        $this->imageCollections->removeElement($imageCollection);
        return $this;
    }
    
    public function setImage(File $file) {
        $this->image = $file;
        
        return $this;
    }
    
    public function getImage() {
        return $this->image;
    }
}

