<?php

namespace App\DataFixtures;

use App\Entity\Game;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 20; $i++) { 
            $game = new Game();
            $game
                ->setTitle($faker->sentence(rand(1,3)))
                ->setDescription(rand(0, 100) < 85 ? $faker->paragraph(rand(1,5)) : null)
                ->setCover($faker->imageUrl())
                ->setReleasedAt($faker->dateTimeBetween('-10 years', '+3 years'))
            ;
            $manager->persist($game);
        }

        $manager->flush();
    }
}
