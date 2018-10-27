<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\CodeRefGrandDomDomProAppellations;

class CodeRefGrandDomDomProAppellationsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $listElems = json_decode(file_get_contents('src/JsonData/cr_gd_dp_appellations.json'), true);

        foreach($listElems as $elem)
        {
            $item = new \App\Entity\CodeRefGrandDomDomProAppellations();
            $item->setCodeGrandDomaine($elem["code_grand_domaine"])
                ->setCodeDomaineProfessionnel($elem["code_domaine_professionnel"])
                ->setNumeroFicheRome($elem["numero_fiche_rome"])
                ->setIntitule($elem["intitule"])
                ->setLibelleAppellationLong($elem["libelle_appellation_long"])
                ->setLibelleAppellationCourt($elem["libelle_appellation_court"])
                ->setTypeProvenance($elem["type_provenance"]);

            $elem["code_fiche"] ? $item->setCodeFiche($elem["code_fiche"]) : 0;
            $elem["ogr_rome"] ? $item->setOgrRome($elem["ogr_rome"]) : 0;
            $elem["ogr_appellation"] ? $item->setOgrAppellation($elem["ogr_appellation"]) : 0;
            $elem["priorisation"] ? $item->setPriorisation($elem["priorisation"]) : 0;

            $manager->persist($item);
        }

        $manager->flush();
    }
}
