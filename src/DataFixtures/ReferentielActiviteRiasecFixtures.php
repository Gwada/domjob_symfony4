<?php

namespace App\DataFixtures;

use App\Entity\ReferentielActiviteRiasec;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ReferentielActiviteRiasecFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $listElems = json_decode(file_get_contents('src/JsonData/referentiel_activite_riasec.json'), true);

        foreach($listElems as $elem)
        {
            $item = new \App\Entity\ReferentielActiviteRiasec();
            $item->setCodeOgr($elem["code_ogr"])
                ->setRiasecMajeur($elem["riasec_majeur"])
                ->setRiasecMineur($elem["riasec_mineur"]);

            $manager->persist($item);
        }

        $manager->flush();
    }
}
