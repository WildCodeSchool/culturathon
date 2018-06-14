<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emotion
 *
 * @ORM\Table(name="emotion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EmotionRepository")
 */
class Emotion
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
     * @var int
     *
     * @ORM\Column(name="likes", type="integer", nullable=true)
     */
    private $likes;

    /**
     * @var int
     *
     * @ORM\Column(name="yellow", type="integer", nullable=true)
     */
    private $yellow;

    /**
     * @var int
     *
     * @ORM\Column(name="green", type="integer", nullable=true)
     */
    private $green;

    /**
     * @var int
     *
     * @ORM\Column(name="blue", type="integer", nullable=true)
     */
    private $blue;

    /**
     * @var int
     *
     * @ORM\Column(name="violet", type="integer", nullable=true)
     */
    private $violet;

    /**
     * @var int
     *
     * @ORM\Column(name="red", type="integer", nullable=true)
     */
    private $red;


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
     * Set likes
     *
     * @param integer $likes
     *
     * @return Emotion
     */
    public function setLikes($likes)
    {
        $this->likes = $likes;

        return $this;
    }

    /**
     * Get likes
     *
     * @return int
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * Set yellow
     *
     * @param integer $yellow
     *
     * @return Emotion
     */
    public function setYellow($yellow)
    {
        $this->yellow = $yellow;

        return $this;
    }

    /**
     * Get yellow
     *
     * @return int
     */
    public function getYellow()
    {
        return $this->yellow;
    }

    /**
     * Set green
     *
     * @param integer $green
     *
     * @return Emotion
     */
    public function setGreen($green)
    {
        $this->green = $green;

        return $this;
    }

    /**
     * Get green
     *
     * @return int
     */
    public function getGreen()
    {
        return $this->green;
    }

    /**
     * Set blue
     *
     * @param integer $blue
     *
     * @return Emotion
     */
    public function setBlue($blue)
    {
        $this->blue = $blue;

        return $this;
    }

    /**
     * Get blue
     *
     * @return int
     */
    public function getBlue()
    {
        return $this->blue;
    }

    /**
     * Set violet
     *
     * @param integer $violet
     *
     * @return Emotion
     */
    public function setViolet($violet)
    {
        $this->violet = $violet;

        return $this;
    }

    /**
     * Get violet
     *
     * @return int
     */
    public function getViolet()
    {
        return $this->violet;
    }

    /**
     * Set red
     *
     * @param integer $red
     *
     * @return Emotion
     */
    public function setRed($red)
    {
        $this->red = $red;

        return $this;
    }

    /**
     * Get red
     *
     * @return int
     */
    public function getRed()
    {
        return $this->red;
    }
}

