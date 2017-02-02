<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Role;

class LoadRoleData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $adminRole = new Role();
        $adminRole->setRole('admin');

        $manager->persist($adminRole);
        $manager->flush();

        $managerRole = new Role();
        $managerRole->setRole('manager');

        $manager->persist($managerRole);
        $manager->flush();
    }
}
