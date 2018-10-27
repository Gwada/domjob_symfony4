<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ReferentielCodeRomeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $listElems = json_decode(file_get_contents('src/JsonData/referentiel_code_rome.json'), true);

        foreach($listElems as $elem)
        {
            $item = new \App\Entity\ReferentielCodeRome();
            $item->setCodeRome($elem["code_rome"])
                ->setCodeFicheEm($elem["code_fiche_em"])
                ->setCodeOgr($elem["code_ogr"])
                ->setLibelleRome($elem["libelle_rome"])
                ->setStatut($elem["statut"]);

            $manager->persist($item);
        }

        $manager->flush();
    }
}