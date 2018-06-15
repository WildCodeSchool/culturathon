<?php
/**
 * Created by PhpStorm.
 * User: gollum
 * Date: 14/06/18
 * Time: 16:54
 */

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Museum;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class MuseumFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $museum = new Museum();
        $museum->setName('French Art Studio');
        $museum->setCity('Londres');
        $manager->persist($museum);

        $museum1 = new Museum();
        $museum1->setName('Le Louvre');
        $museum1->setCity('Paris');
        $manager->persist($museum1);

        $museum2 = new Museum();
        $museum2->setName('LabO Musée');
        $museum2->setCity('Orléans');
        $manager->persist($museum2);

        $manager->flush();

        $this->addReference('museum', $museum);
        $this->addReference('museum1', $museum1);
        $this->addReference('museum2', $museum2);
    }
}