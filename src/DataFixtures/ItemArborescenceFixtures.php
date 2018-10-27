<?php

namespace App\DataFixtures;

use App\Entity\ItemArborescence;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ItemArborescenceFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $listElems = json_decode(file_get_contents('src/JsonData/item_arborescence.json'), true);

        foreach($listElems as $elem)
        {
            $item = new \App\Entity\ItemArborescence();
            $item->setCodeOgr($elem["code_ogr"])
                ->setCodePere($elem["code_pere"])
                ->setCodeNoeud($elem["code_noeud"])
                ->setLibelleItemArbo($elem["libelle_item_arbo"])
                ->setCodeItemArboAssocie($elem["code_item_arbo_associe"])
                ->setCodeTypeNoeud($elem["code_type_noeud"])
                ->setLibelleTypeNoeud($elem["libelle_type_noeud"])
                ->setStatut($elem["statut"]);

            $manager->persist($item);
        }

        $manager->flush();
    }
}
