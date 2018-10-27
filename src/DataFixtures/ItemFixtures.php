<?php

namespace App\DataFixtures;

use App\Entity\Item;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ItemFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $listElems = json_decode(file_get_contents('src/JsonData/item.json'), true);

        foreach($listElems as $elem)
        {
            $item = new \App\Entity\Item();
            $item->setCodeOgr($elem["code_ogr"])
                ->setLibelle($elem["libelle"])
                ->setCodeTypeReferentiel($elem["code_type_referentiel"])
                ->setCodeRefRubrique($elem["code_ref_rubrique"])
                ->setCodeTeteRgpmt($elem["code_tete_rgpmt"])
                ->setLibelleActiviteImpression($elem["libelle_activite_impression"])
                ->setLibelleEnTeteRegroupement($elem["libelle_en_tete_regroupement"]);

            $manager->persist($item);
        }

        $manager->flush();
    }
}
