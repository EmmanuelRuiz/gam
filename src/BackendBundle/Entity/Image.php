<?php

namespace BackendBundle\Entity;

/**
 * Image
 */
class Image
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $image;

    /**
     * @var \BackendBundle\Entity\Cenote
     */
    private $cenote;


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
     * Set image
     *
     * @param string $image
     *
     * @return Image
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set cenote
     *
     * @param \BackendBundle\Entity\Cenote $cenote
     *
     * @return Image
     */
    public function setCenote(\BackendBundle\Entity\Cenote $cenote = null)
    {
        $this->cenote = $cenote;

        return $this;
    }

    /**
     * Get cenote
     *
     * @return \BackendBundle\Entity\Cenote
     */
    public function getCenote()
    {
        return $this->cenote;
    }
}

