<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

/**
 * Here should be everything that may be needed at site starting to work point.
 */
class BaseFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        //$manager->flush();
    }
}
