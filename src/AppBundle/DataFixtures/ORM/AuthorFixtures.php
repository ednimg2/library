<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Author;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class AuthorFixtures  extends AbstractFixture implements OrderedFixtureInterface {

    function load(ObjectManager $manager)
    {
        $author1 = new Author();
        $author1->setName("Beata Nicholson");
        $this->addReference('Beata Nicholson', $author1);
        $manager->persist($author1);

        $author2 = new Author();
        $author2->setName("Juan Pablo Escobar");
        $this->addReference('Juan Pablo Escobar', $author2);
        $manager->persist($author2);

        $author3 = new Author();
        $author3->setName("Lee Child");
        $this->addReference('Lee Child', $author3);
        $manager->persist($author3);

        $author4 = new Author();
        $author4->setName("Chris Anderson");
        $this->addReference('Chris Anderson', $author4);
        $manager->persist($author4);

        $author5 = new Author();
        $author5->setName("Robert B. Cialdini");
        $this->addReference('Robert B. Cialdini', $author5);
        $manager->persist($author5);

        $manager->flush();

    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 1;
    }
}