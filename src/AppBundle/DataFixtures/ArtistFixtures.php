<?php
/**
 * Created by PhpStorm.
 * User: gollum
 * Date: 14/06/18
 * Time: 16:54
 */

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Artist;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ArtistFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $artist = new Artist();
        $artist->setFirstName('Jan');
        $artist->setLastName('Brueghel');
        $artist->setNickName('Le jeune');

        $manager->persist($artist);

        $artist = new Artist();
        $artist->setFirstName('Léon');
        $artist->setLastName('Cogniet');
        $artist->setNickName('LC');

        $manager->persist($artist);

        $artist = new Artist();
        $artist->setFirstName('Eugène');
        $artist->setLastName('Delacroix');
        $artist->setNickName('100 balles');

        $manager->persist($artist);

        $artist = new Artist();
        $artist->setFirstName('Antonio');
        $artist->setLastName('Allegri');
        $artist->setNickName('Le corrège');

        $manager->persist($artist);

        $artist = new Artist();
        $artist->setFirstName('Jean-Baptiste');
        $artist->setLastName('Perronneau');
        $artist->setNickName('JBP');

        $manager->persist($artist);

        $artist = new Artist();
        $artist->setFirstName('Manolo');
        $artist->setLastName('Chrétien');
        $artist->setNickName('Man');

        $manager->persist($artist);

        $artist = new Artist();
        $artist->setFirstName('Pia');
        $artist->setLastName('Loro');
        $artist->setNickName('Pia');

        $manager->persist($artist);


        $manager->flush();

        $this->addReference('artist', $artist);
    }
}