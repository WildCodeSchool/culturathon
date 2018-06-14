<?php
/**
 * Created by PhpStorm.
 * User: gollum
 * Date: 14/06/18
 * Time: 16:54
 */

namespace AppBundle\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Emotion;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $emotion = new Emotion();
        $emotion->setName('joie');
        $emotion->setColor('yellow');
        $manager->persist($emotion);

        $emotion = new Emotion();
        $emotion->setName('tristesse');
        $emotion->setColor('bleu');
        $manager->persist($emotion);

        $emotion = new Emotion();
        $emotion->setName('colère');
        $emotion->setColor('rouge');
        $manager->persist($emotion);

        $emotion = new Emotion();
        $emotion->setName('espoir');
        $emotion->setColor('vert');
        $manager->persist($emotion);

        $emotion = new Emotion();
        $emotion->setName('mystère');
        $emotion->setColor('violet');
        $manager->persist($emotion);

        $manager->flush();

        $this->addReference('emotion', $emotion);
    }
}