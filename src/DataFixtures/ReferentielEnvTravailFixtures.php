<?php

namespace App\DataFixtures;

use App\Entity\ReferentielEnvTravail;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ReferentielEnvTravailFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $listElems = json_decode(file_get_contents('src/JsonData/referentiel_env_travail.json'), true);

        foreach($listElems as $elem)
        {
            $item = new \App\Entity\ReferentielEnvTravail();
            $item->setCodeOgr($elem["code_ogr"])
                ->setLibelleEnvTravail($elem["libelle_env_travail"])
                ->setCodeTypeSectionEnvTrav($elem["code_type_section_env_trav"])
                ->setLibelleTypeSectionEnvTrav($elem["libelle_type_section_env_trav"])
                ->setStatut($elem["statut"]);

            $manager->persist($item);
        }

        $manager->flush();
    }
}
