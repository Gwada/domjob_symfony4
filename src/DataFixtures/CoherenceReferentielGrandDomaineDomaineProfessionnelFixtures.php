<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CoherenceReferentielGrandDomaineDomaineProfessionnelFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $listElems = json_decode(file_get_contents('src/JsonData/cr_gd_dp.json'), true);

        foreach($listElems as $elem)
        {
            $item = new \App\Entity\CoherenceReferentielGrandDomaineDomaineProfessionnel();
            $item->setCodeRome($elem["code_rome"])
                ->setLibelleRome($elem["libelle_rome"])
                ->setCodeGrandDomaine($elem["code_grand_domaine"])
                ->setLibelleGrandDomaine($elem["libelle_grand_domaine"])
                ->setCodeDomaineProfessionnel($elem["code_domaine_professionel"])
                ->setLibelleDomaineProfessionnel($elem["libelle_domaine_professionel"]);

            $manager->persist($item);
        }

        $manager->flush();
    }
}
