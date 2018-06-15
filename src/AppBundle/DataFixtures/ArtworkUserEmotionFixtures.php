<?php
/**
 * Created by PhpStorm.
 * User: gollum
 * Date: 14/06/18
 * Time: 16:54
 */

namespace AppBundle\DataFixtures;

use AppBundle\Entity\ArtworkUserEmotion;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ArtworkUserEmotionFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $artworkUserEmotion = new ArtworkUserEmotion();
        $artworkUserEmotion->setEmotion();
        $artworkUserEmotion->setArtwork(EntityType::class);
        $artworkUserEmotion->setUser(EntityType::class);

        $manager->persist($artworkUserEmotion);

        $manager->flush();

        $this->addReference('artworkUserEmotion', $artworkUserEmotion);
    }
}