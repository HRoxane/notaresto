<?php

namespace App\DataFixtures;

use App\Entity\City;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CityFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $faker = Faker\Factory::create('fr, FR');
        // On créé jusqu'à 1000 villes aléatoires
        for ($i =0; $i < 1000 ; $i++) {
            $city[$i] = new City();
            $city[$i]-> setName($faker -> city );
            $city[$i]-> setZipcode($faker -> postcode );
        }
    
         $manager->persist($city);

        $manager->flush();

}
