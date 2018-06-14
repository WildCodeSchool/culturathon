<?php
/**
 * Created by PhpStorm.
 * User: gollum
 * Date: 14/06/18
 * Time: 15:22
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArtworkUserEmotion
 *
 * @ORM\Table(name="ArtworkUserEmotion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArtworkUserEmotionRepository")
 */

class ArtworkUserEmotion
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
     * @var
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Artwork", inversedBy="aues")
     */
    private $artwork;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="aues")
     */
    private $user;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Emotion", inversedBy="aues")
     */
    private $emotion;

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
     * Set artwork
     *
     * @param \AppBundle\Entity\Artwork $artwork
     *
     * @return ArtworkUserEmotion
     */
    public function setArtwork(\AppBundle\Entity\Artwork $artwork = null)
    {
        $this->artwork = $artwork;

        return $this;
    }

    /**
     * Get artwork
     *
     * @return \AppBundle\Entity\Artwork
     */
    public function getArtwork()
    {
        return $this->artwork;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return ArtworkUserEmotion
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set emotion
     *
     * @param \AppBundle\Entity\Emotion $emotion
     *
     * @return ArtworkUserEmotion
     */
    public function setEmotion(\AppBundle\Entity\Emotion $emotion = null)
    {
        $this->emotion = $emotion;

        return $this;
    }

    /**
     * Get emotion
     *
     * @return \AppBundle\Entity\Emotion
     */
    public function getEmotion()
    {
        return $this->emotion;
    }
}
