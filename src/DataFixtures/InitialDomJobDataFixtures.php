<?php

namespace App\DataFixtures;

use App\Entity\GrandDomaine;
use App\Entity\DomaineProfessionnel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class InitialDomJobDataFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        //set all grand domaine datas
        $listGrandDomain = json_decode(file_get_contents('src/JsonData/grand_domaine.json'), true);

        foreach($listGrandDomain as $grandDomain)
        {
            $item = new GrandDomaine();
            $item->setCodeGrandDomaine($grandDomain['code_grand_domaine'])
                ->setLibelleGrandDomaine($grandDomain['libelle_grand_domaine']);
    
            $manager->persist($item);
        }

        $manager->flush();

        /*
        * set all domaine professionnel with:
        *   - grand domaine match
        */
        $listDomainProfessionnel = json_decode(file_get_contents('src/JsonData/domaine_professionnel.json'), true);
        $grandomaineRepository = $manager->getRepository(GrandDomaine::class);

        foreach($listDomainProfessionnel as $domainProfessionnel)
        {
            $item = new DomaineProfessionnel();
            $item->setCodeDomaineProfessionnel($domainProfessionnel['code_domaine_professionnel'])
                ->setLibelleDomaineProfessionnel($domainProfessionnel['libelle_domaine_professionnel']);
            
            $grandomaine = $grandomaineRepository->findOneByCodeGrandDomaine(mb_substr($domainProfessionnel['code_domaine_professionnel'], 0, 1));
            $grandomaine->addDomainesProfessionnel($item);
            $manager->persist($grandomaine);
            $manager->persist($item);
        }

        $manager->flush();
    }
}
