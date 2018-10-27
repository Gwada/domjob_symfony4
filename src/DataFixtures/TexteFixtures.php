<?php

namespace App\DataFixtures;

use App\Entity\Texte;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TexteFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $listElems = json_decode(file_get_contents('src/JsonData/texte.json'), true);

        foreach($listElems as $elem)
        {
            $item = new \App\Entity\Texte();
            $item->setCodeRome($elem["code_rome"])
                ->setPositionLibelleTxt($elem["position_libelle_txt"])
                ->setCodeTypeTexte($elem["code_type_texte"])
                ->setLibelleTexte($elem["libelle_texte"])
                ->setLibelleTypeTexte($elem["libelle_type_texte"]);

            $manager->persist($item);
        }

        $manager->flush();
    }
}
