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

        $emotion1 = new Emotion();
        $emotion1->setName('tristesse');
        $emotion1->setColor('bleu');
        $manager->persist($emotion1);

        $emotion2 = new Emotion();
        $emotion2->setName('colère');
        $emotion2->setColor('rouge');
        $manager->persist($emotion2);

        $emotion3 = new Emotion();
        $emotion3->setName('espoir');
        $emotion3->setColor('vert');
        $manager->persist($emotion3);

        $emotion4 = new Emotion();
        $emotion4->setName('mystère');
        $emotion4->setColor('violet');
        $manager->persist($emotion4);

        $manager->flush();

        $this->addReference('emotion', $emotion);
        $this->addReference('emotion1', $emotion1);
        $this->addReference('emotion2', $emotion2);
        $this->addReference('emotion3', $emotion3);
        $this->addReference('emotion4', $emotion4);
    }
}