<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setName('abbasi');
        $userAdmin->setRole('admin');

        $manager->persist($userAdmin);
        $manager->flush();

        $user = new User();
        $user->setName('xyz');
        $user->setRole('manager');

        $manager->persist($user);
        $manager->flush();
    }
}
