<?php
namespace AppBundle\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\Exception\UploadException;
class FileUploader
{
    private $targetDir;
    
    public function __construct($targetDir)
    {
        $this->targetDir = $targetDir;
    }
    
    public function upload($file)
    {
        if(!$file instanceof UploadedFile) {
            return false;
        }
        
         $rand = md5(uniqid());
         $folder = $this->targetDir."/".$rand;
        
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

        //return substr($folder, strpos($folder, "web"));
        return $rand;
    }
    
    public function getTargetDir()
    {
        return $this->targetDir;
    }
}