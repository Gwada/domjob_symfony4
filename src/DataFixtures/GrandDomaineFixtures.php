<?php

namespace App\DataFixtures;

use App\Entity\GrandDomaine;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class GrandDomaineFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $listGrandDomain = json_decode(file_get_contents('src/JsonData/grand_domaine.json'), true);

        foreach($listGrandDomain as $grandDomain)
        {
            $item = new GrandDomaine();
            $item->setCodeGrandDomaine($grandDomain['code_grand_domaine'])
                ->setLibelleGrandDomaine($grandDomain['libelle_grand_domaine']);

            $manager->persist($item);
        }

        $manager->flush();
    }
}
