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

        $museum = new Museum();
        $museum->setName('Le Louvre');
        $museum->setCity('Paris');
        $manager->persist($museum);

        $museum = new Museum();
        $museum->setName('LabO Musée');
        $museum->setCity('Orléans');
        $manager->persist($museum);

        $manager->flush();

        $this->addReference('museum', $museum);
    }
}