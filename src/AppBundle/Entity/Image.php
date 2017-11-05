<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Entity\ImageCollection;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\Exception\UploadException;

/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ImageRepository")
 * @ORM\HasLifecycleCallbacks
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
     *      @Assert\NotBlank(message="form.image.errors.caption_required", groups={"Default", "modification"})
     */
    private $imageCaption;

    /**
     *
     * @var string @ORM\Column(name="image_copyright", type="string", length=255, nullable=true)
     *      @Assert\NotBlank(message="form.image.errors.copyright_required", groups={"Default", "modification"})
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
     *
     * @var File @Assert\NotBlank(message="form.image.errors.image_required", groups={"Default"})
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

    public function setImage($file = null)
    {
        $this->image = $file;
        
        if (isset($this->imageFilepath)) {
            $this->temp = $this->imageFilepath;
            $this->imageFilepath = null;
        } else {
            $this->imageFilepath = 'initial';
        }
        
        // when editing images
        if ($file == null) {
            return $this;
        }
        
        $this->image = $file;
        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->getImage()) {
            $file = $this->getImage();
            $filename = uniqid(mt_rand());
            $this->imageFilepath = $filename;
            $this->setImageSize($file->getSize());
            $this->setImageFormat($file->guessExtension());
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function postUpload()
    {
        if($this->getImage()) {
            $this->createFiles($this->getImage());//->move(implode("/", [$this->getUploadDir(), $this->imageFilename], "file.jpg"));
        }
        
        if (isset($this->temp)) {
            unlink($this->getUploadDir()."/".$this->temp);
            $this->temp = null;
        }
        $this->image = null;
    }
    
    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }
    
    private function getUploadDir() {
        return "upload";
    }
    
    private function createFiles($file) {
        
        $rand = md5(uniqid());
        $folder = $this->getUploadDir()."/".$rand;        
        
        if(!mkdir($folder)) {
            throw new UploadException("Unable to create folder");
        }
        
        // we're going to want to resize the file here...
        list($width, $height) = getimagesize($file);
        
        if($width <> 1024 && $width <> 682) {
            throw new UploadException("Image has wrong dimension (1024x768 is required)");
        }
        
        $source_image = \imagecreatefromjpeg($file);
        
        // now we create half-sized image
        $percent = 1;
        
        $newwidth = $percent * $width;
        $newheight = $percent * $height;
        
        $image = \imagecreatetruecolor($newwidth, $newheight);
        \imagecopyresampled($image, $source_image, 0,0,0,0, $newwidth, $newheight, $width, $height);
        
        \imagejpeg($image, $folder."/"."original.jpg");
        \imagedestroy($image);
        
        // next, we create an image that is 1024 by 350, cropping from the top.
        $cropTo = ['x'=>0, 'y'=>0, 'width'=>imagesx($source_image), 'height'=>350];
        
        $toSave = \imagecrop($source_image, $cropTo);
        \imagejpeg($toSave, $folder."/"."banner.jpg");
        \imagedestroy($toSave);
        
        // now we create half-sized image
        $percent = 0.5;
        
        $newwidth = $percent * $width;
        $newheight = $percent * $height;
        
        $image = \imagecreatetruecolor($newwidth, $newheight);
        \imagecopyresampled($image, $source_image, 0,0,0,0, $newwidth, $newheight, $width, $height);
        
        \imagejpeg($image, $folder."/"."medium.jpg");
        \imagedestroy($image);
        
        // now we create quarter-sized image
        $percent = 0.25;
        
        $newwidth = $percent * $width;
        $newheight = $percent * $height;
        
        $image = \imagecreatetruecolor($newwidth, $newheight);
        \imagecopyresampled($image, $source_image, 0,0,0,0, $newwidth, $newheight, $width, $height);
        
        \imagejpeg($image, $folder."/"."small.jpg");
        \imagedestroy($image);
        
        // now we create a thumbnail
        $percent = 0.125;
        
        $newwidth = $percent * $width;
        $newheight = $percent * $height;
        
        $image = \imagecreatetruecolor($newwidth, $newheight);
        \imagecopyresampled($image, $source_image, 0,0,0,0, $newwidth, $newheight, $width, $height);
        
        \imagejpeg($image, $folder."/"."thumb.jpg");
        \imagedestroy($image);
        
        $this->setImageFilepath($rand);

    }
    
    public function __toString() {
        return $this->imageFilepath;
    }
}

