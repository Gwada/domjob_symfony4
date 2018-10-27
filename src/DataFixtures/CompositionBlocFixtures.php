<?php

namespace App\DataFixtures;

use App\Entity\CompositionBloc;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CompositionBlocFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $listCompositionBloc = json_decode(file_get_contents('src/JsonData/composition_bloc.json'), true);

        foreach($listCompositionBloc as $compositionBloc)
        {
            $item = new CompositionBloc();
            $item->setCodeCompoBloc($compositionBloc["code_compo_bloc"])
                ->setLibelleBloc($compositionBloc["libelle_bloc"])
                ->setTypeReferentiel($compositionBloc["type_referentiel"]);

            $manager->persist($item);
        }

        $manager->flush();
    }
}
