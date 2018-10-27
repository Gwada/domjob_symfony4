<?php

namespace App\DataFixtures;

use App\Entity\TypeReferentiel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TypeReferentielFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $listElems = json_decode(file_get_contents('src/JsonData/type_referentiel.json'), true);

        foreach($listElems as $elem)
        {
            $item = new \App\Entity\TypeReferentiel();
            $item->setCodeTypeReferentiel($elem["code_type_referentiel"])
                ->setCodeTypeParticulier($elem["code_type_particulier"])
                ->setLibelleTypeReferentiel($elem["libelle_type_referentiel"])
                ->setNomTableCorrespArbre($elem["nom_table_corresp_arbre"])
                ->setNomTableReferentiel($elem["nom_table_referentiel"]);

            $manager->persist($item);
        }

        $manager->flush();
    }
}
