<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Projets;

class ProjectFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <= 10; $i++){
        	$projet = new projets();
        	$projet->setTitle("Article n°$i")
        	        ->setContent("<p>Un paragraphe random n°$i</p>")
        	        ->setImage("http://placehold.it/350x150")
        	        ->setCreatedAt(new \DateTime());
        	$manager->persist($projet);
        }

        $manager->flush();
    }
}
