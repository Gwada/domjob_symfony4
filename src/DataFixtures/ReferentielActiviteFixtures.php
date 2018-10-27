<?php

namespace App\DataFixtures;

use App\Entity\ReferentielActivite;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ReferentielActiviteFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $listElems = json_decode(file_get_contents('src/JsonData/referentiel_activite.json'), true);

        foreach($listElems as $elem)
        {
            $item = new \App\Entity\ReferentielActivite();
            $item->setCodeOgr($elem["code_ogr"])
                ->setCodeTeteRgpmt($elem["code_tete_rgpmt"])
                ->setLibelleActivite($elem["libelle_activite"])
                ->setLibelleActiviteImpression($elem["libelle_activite_impression"])
                ->setCodeTypeActivite($elem["code_type_activite"])
                ->setLibelleTypeActivite($elem["libelle_type_activite"])
                ->setCodeTypeItemActivite($elem["code_type_item_activite"])
                ->setLibelleTypeItemActivite($elem["libelle_type_item_activite"])
                ->setStatut($elem["statut"]);

            $manager->persist($item);
        }

        $manager->flush();
    }
}
