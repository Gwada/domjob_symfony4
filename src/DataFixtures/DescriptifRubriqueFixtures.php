<?php

namespace App\DataFixtures;

use App\Entity\DescriptifRubrique;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class DescriptifRubriqueFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $listElems = json_decode(file_get_contents('src/JsonData/descriptif_rubrique.json'), true);

        foreach($listElems as $elem)
        {
            $item = new \App\Entity\DescriptifRubrique();
            $item->setCodeRefRubrique($elem["code_ref_rubrique"])
                ->setCodeTypeReferentiel($elem["code_type_referentiel"])
                ->setCodeCompoBloc($elem["code_compo_bloc"])
                ->setPositionBloc($elem["position_bloc"])
                ->setLibelleRefRubrique($elem["libelle_ref_rubrique"]);

            $manager->persist($item);
        }

        $manager->flush();
    }
}
