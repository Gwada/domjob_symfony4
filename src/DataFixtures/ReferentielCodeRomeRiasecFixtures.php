<?php

namespace App\DataFixtures;

use App\Entity\ReferentielCodeRomeRiasec;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ReferentielCodeRomeRiasecFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $listElems = json_decode(file_get_contents('src/JsonData/referentiel_code_rome_riasec.json'), true);

        foreach($listElems as $elem)
        {
            $item = new \App\Entity\ReferentielCodeRomeRiasec();
            $item->setCodeRome($elem["code_rome"])
                ->setRiasecMajeur($elem["riasec_majeur"])
                ->setRiasecMineur($elem["riasec_mineur"]);

            $manager->persist($item);
        }

        $manager->flush();
    }
}
