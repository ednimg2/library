<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Book;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class BookFixtures  extends AbstractFixture implements OrderedFixtureInterface {

    function load(ObjectManager $manager)
    {

        $book1 = new Book();
        $book1->setTitle('PABLAS ESKOBARAS – MANO TĖVAS');
        $book1->setCategory('History');
        $book1->setPrice(9.29);
        $book1->setIsbn("9786090401941");
        $book1->setAuthor($this->getReference('Juan Pablo Escobar'));
        $manager->persist($book1);

        $book2 = new Book();
        $book2->setTitle('Beatos virtuvė: geriausi TV laidos receptai');
        $book2->setCategory('Food & Health');
        $book2->setPrice(12.49);
        $book2->setIsbn("9786098157086");
        $book2->setAuthor($this->getReference('Beata Nicholson'));
        $manager->persist($book2);

        $book3 = new Book();
        $book3->setTitle('Beatos virtuvė: mamų knyga. Receptai vaikams ir šeimai');
        $book3->setCategory('Food & Health');
        $book3->setPrice(14.93);
        $book3->setIsbn("9786099534787");
        $book3->setAuthor($this->getReference('Beata Nicholson'));
        $manager->persist($book3);

        $book4 = new Book();
        $book4->setTitle('VIENAS ŠŪVIS');
        $book4->setCategory('Romance');
        $book4->setPrice(8.49);
        $book4->setIsbn("9786090402306");
        $book4->setAuthor($this->getReference('Lee Child'));
        $manager->persist($book4);

        $book5 = new Book();
        $book5->setTitle('TED Talks. Viešasis kalbėjimas');
        $book5->setCategory('Business');
        $book5->setPrice(11.28);
        $book5->setIsbn("9786094662386");
        $book5->setAuthor($this->getReference('Chris Anderson'));
        $manager->persist($book5);

        $book6 = new Book();
        $book6->setTitle('Įtakos menas');
        $book6->setCategory('Business');
        $book6->setPrice(14.29);
        $book6->setIsbn("9786090130681");
        $book6->setAuthor($this->getReference('Robert B. Cialdini'));
        $manager->persist($book6);

        $manager->flush();

    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 2;
    }
}