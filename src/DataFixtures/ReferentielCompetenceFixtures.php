<?php

namespace App\DataFixtures;

use App\Entity\ReferentielCompetence;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ReferentielCompetenceFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $listElems = json_decode(file_get_contents('src/JsonData/referentiel_competence.json'), true);

        foreach($listElems as $elem)
        {
            $item = new \App\Entity\ReferentielCompetence();
            $item->setCodeOgr($elem["code_ogr"])
                ->setLibelleCompetence($elem["libelle_competence"])
                ->setCodeTypeCompetence($elem["code_type_competence"])
                ->setLibelleTypeCompetence($elem["libelle_type_competence"])
                ->setStatut($elem["statut"]);

            $manager->persist($item);
        }

        $manager->flush();
    }
}
