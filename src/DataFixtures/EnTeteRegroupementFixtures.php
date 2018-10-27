<?php

namespace App\DataFixtures;

use App\Entity\EnTeteRegroupement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class EnTeteRegroupementFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $listElems = json_decode(file_get_contents('src/JsonData/en_tete_regroupement.json'), true);

        foreach($listElems as $elem)
        {
            $item = new \App\Entity\EnTeteRegroupement();
            $item->setCodeTeteRgpmt($elem["code_tete_rgpmt"])
                ->setLibelleEnTeteRegroupement($elem["libelle_en_tete_regroupement"]);

            $manager->persist($item);
        }

        $manager->flush();
    }
}
