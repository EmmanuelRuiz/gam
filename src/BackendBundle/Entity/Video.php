<?php

namespace BackendBundle\Entity;

/**
 * Video
 */
class Video
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $video;

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
     * Set video
     *
     * @param string $video
     *
     * @return Video
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set cenote
     *
     * @param \BackendBundle\Entity\Cenote $cenote
     *
     * @return Video
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

