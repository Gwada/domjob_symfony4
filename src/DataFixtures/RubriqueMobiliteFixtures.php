<?php

namespace App\DataFixtures;

use App\Entity\RubriqueMobilite;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class RubriqueMobiliteFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $listElems = json_decode(file_get_contents('src/JsonData/rubrique_mobilite.json'), true);

        foreach($listElems as $elem)
        {
            $item = new \App\Entity\RubriqueMobilite();
            $item->setCodeRome($elem["code_rome"])
                ->setCodeRomeCible($elem["code_rome_cible"])
                ->setCodeAppellationSource($elem["code_appellation_source"])
                ->setCodeAppellationCible($elem["code_appellation_cible"])
                ->setCodeTypeMobilite($elem["code_type_mobilite"])
                ->setLibelleTypeMobilite($elem["libelle_type_mobilite"]);

            $manager->persist($item);
        }

        $manager->flush();
    }
}
