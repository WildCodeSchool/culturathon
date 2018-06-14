<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artist
 *
 * @ORM\Table(name="artist")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArtistRepository")
 */
class Artist
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
     * @ORM\Column(name="firstName", type="string", length=25)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=25)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="nickName", type="string", length=30)
     */
    private $nickName;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Museum", mappedBy="artists")
     */
    private $museums;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Artwork", mappedBy="artists")
     */
    private $artworks;


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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Artist
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Artist
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set nickName
     *
     * @param string $nickName
     *
     * @return Artist
     */
    public function setNickName($nickName)
    {
        $this->nickName = $nickName;

        return $this;
    }

    /**
     * Get nickName
     *
     * @return string
     */
    public function getNickName()
    {
        return $this->nickName;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->museums = new \Doctrine\Common\Collections\ArrayCollection();
        $this->artworks = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add museum
     *
     * @param \AppBundle\Entity\Museum $museum
     *
     * @return Artist
     */
    public function addMuseum(\AppBundle\Entity\Museum $museum)
    {
        $this->museums[] = $museum;

        return $this;
    }

    /**
     * Remove museum
     *
     * @param \AppBundle\Entity\Museum $museum
     */
    public function removeMuseum(\AppBundle\Entity\Museum $museum)
    {
        $this->museums->removeElement($museum);
    }

    /**
     * Get museums
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMuseums()
    {
        return $this->museums;
    }

    /**
     * Add artwork
     *
     * @param \AppBundle\Entity\Artwork $artwork
     *
     * @return Artist
     */
    public function addArtwork(\AppBundle\Entity\Artwork $artwork)
    {
        $this->artworks[] = $artwork;

        return $this;
    }

    /**
     * Remove artwork
     *
     * @param \AppBundle\Entity\Artwork $artwork
     */
    public function removeArtwork(\AppBundle\Entity\Artwork $artwork)
    {
        $this->artworks->removeElement($artwork);
    }

    /**
     * Get artworks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArtworks()
    {
        return $this->artworks;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}
