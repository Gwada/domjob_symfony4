<?php

namespace App\DataFixtures;

use App\Entity\ReferentielAppellation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ReferentielAppellationFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $listElems = json_decode(file_get_contents('src/JsonData/referentiel_appellation.json'), true);

        foreach($listElems as $elem)
        {
            $item = new \App\Entity\ReferentielAppellation();
            $item->setCodeOgr($elem["code_ogr"])
                ->setLibelleAppellationLong($elem["libelle_appellation_long"])
                ->setLibelleAppellationCourt($elem["libelle_appellation_court"])
                ->setCodeRome($elem["code_rome"])
                ->setCodeTypeSectionAppellation($elem["code_type_section_appellation"])
                ->setLibelleTypeSectionAppellation($elem["libelle_type_section_appellation"])
                ->setStatut($elem["statut"]);

            $manager->persist($item);
        }

        $manager->flush();
    }
}
