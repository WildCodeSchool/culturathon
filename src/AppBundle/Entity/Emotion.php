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
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", nullable=true)
     */
    private $color;

    /**
     * @var
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\ArtworkUserEmotion", mappedBy="emotion")
     */
    private $aues;


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
     * Set name
     *
     * @param string $name
     *
     * @return Emotion
     */
    public function setName($name)
    {
        $this->Name = $name;

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
     * Set color
     *
     * @param string $color
     *
     * @return Emotion
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return int
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->aues = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add aue
     *
     * @param \AppBundle\Entity\ArtworkUserEmotion $aue
     *
     * @return Emotion
     */
    public function addAue(\AppBundle\Entity\ArtworkUserEmotion $aue)
    {
        $this->aues[] = $aue;

        return $this;
    }

    /**
     * Remove aue
     *
     * @param \AppBundle\Entity\ArtworkUserEmotion $aue
     */
    public function removeAue(\AppBundle\Entity\ArtworkUserEmotion $aue)
    {
        $this->aues->removeElement($aue);
    }

    /**
     * Get aues
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAues()
    {
        return $this->aues;
    }
}
