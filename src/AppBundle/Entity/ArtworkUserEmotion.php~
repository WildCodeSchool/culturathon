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
}