<?php
/**
 * Created by PhpStorm.
 * User: gollum
 * Date: 14/06/18
 * Time: 16:54
 */

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Museum;
use AppBundle\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        /*
        $user = new User();
        $user->setFirstName('French Art Studio');
        $user->setLastName('French Art Studio');
        $user->setPhone('French Art Studio');
        $user->setRole('French Art Studio');
        $user->setEmail('French Art Studio');


        $manager->persist($user);

        $manager->flush();
        */
    }
}