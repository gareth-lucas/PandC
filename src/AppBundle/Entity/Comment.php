<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Comment
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommentRepository")
 */
class Comment
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
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime")
     */
    private $creationDate;
    
    /**
     * @var boolean
     * @ORM\Column(name="is_deleted", type="boolean")
     */
    private $isDeleted;
    
    /**
     * @var Blog
     * @ORM\ManyToOne(targetEntity="Blog", inversedBy="comments")
     */
    private $blog;
    
    /**
     * @var ArrayCollection
     * @ORM\ManyToOne(targetEntity="Comment", inversedBy="parent")
     */
    private $comments;

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
     * @return Comment
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
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return Comment
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }
    
    public function setDeleted($deleted) {
        $this->isDeleted = $deleted;
        
        return $this;
    }
    
    public function isDeleted() {
        return $this->isDeleted;
    }
    
    public function setBlog(Blog $blog) {
        $this->blog = $blog;
        
        return $this;
    }
    
    public function getBlog() {
        return $this->blog;
    }
    
    public function addComment($comment) {
        $this->comments->add($comment);
        
        return $this;
    }
    
    public function removeComment($comment) {
        $this->comments->removeElement($comment);
        
        return $this;
    }
    
    public function getComments() {
        return $this->comments->toArray();
    }
}

