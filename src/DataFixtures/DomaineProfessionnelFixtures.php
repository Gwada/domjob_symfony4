<?php

namespace App\DataFixtures;

use App\Entity\DomaineProfessionnel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class DomaineProfessionnelFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
       $listDomainProfessionnel = json_decode(file_get_contents('src/JsonData/domaine_professionnel.json'), true);

        foreach($listDomainProfessionnel as $domainProfessionnel)
        {
            $item = new DomaineProfessionnel();
            $item->setCodeDomaineProfessionnel($domainProfessionnel['code_domaine_professionnel'])
                ->setLibelleDomaineProfessionnel($domainProfessionnel['libelle_domaine_professionnel']);

            $manager->persist($item);
        }

        $manager->flush();
    }
}
