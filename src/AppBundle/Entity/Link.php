<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Link
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
 * @ORM\Column(type="string", length=100)
 */ 
    private $name;

/**
 * @ORM\Column(type="string", length=200)
 */
    private $url;

/**
 * @ORM\Column(type="text")
 */
    private $description;

/**
 * @ORM\Column(type="boolean")
 */
    private $isVideo;

/**
 * @ORM\Column(type="boolean")
 */
    private $isArticle;

/**
 * @ORM\Column(type="boolean")
 */
    private $isImage;

    /**
     * Get id
     *
     * @return integer
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
     * @return Link
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
     * Set url
     *
     * @param string $url
     *
     * @return Link
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Link
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
     * Set isVideo
     *
     * @param boolean $isVideo
     *
     * @return Link
     */
    public function setIsVideo($isVideo)
    {
        $this->isVideo = $isVideo;

        return $this;
    }

    /**
     * Get isVideo
     *
     * @return boolean
     */
    public function getIsVideo()
    {
        return $this->isVideo;
    }

    /**
     * Set isArticle
     *
     * @param boolean $isArticle
     *
     * @return Link
     */
    public function setIsArticle($isArticle)
    {
        $this->isArticle = $isArticle;

        return $this;
    }

    /**
     * Get isArticle
     *
     * @return boolean
     */
    public function getIsArticle()
    {
        return $this->isArticle;
    }

    /**
     * Set isImage
     *
     * @param boolean $isImage
     *
     * @return Link
     */
    public function setIsImage($isImage)
    {
        $this->isImage = $isImage;

        return $this;
    }

    /**
     * Get isImage
     *
     * @return boolean
     */
    public function getIsImage()
    {
        return $this->isImage;
    }
}
