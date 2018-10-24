<?php

namespace App\DataFixtures;

use App\Entity\City;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CityFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $cities = json_decode(file_get_contents('src/JsonData/codes-postaux.json'), true);

        foreach($cities as $city)
        {
            $item = new City();
            $item->setCodePostal($city['codePostal'])
                ->setCodeCommune($city['codeCommune'])
                ->setNomCommune($city['nomCommune'])
                ->setLibelleAcheminement($city['libelleAcheminement']);
    
            $manager->persist($item);
        }
        $manager->flush();
    }
}
