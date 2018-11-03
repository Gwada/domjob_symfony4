<?php

namespace App\DataFixtures;

use App\Entity\GrandDomaine;
use App\Entity\DomaineProfessionnel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Z1DomProTOGrdDomFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $grandsDommainesList = $manager->getRepository(GrandDomaine::class)->findAll();
        $dommainesProfessionelsList = $manager->getRepository(DomaineProfessionnel::class)->findAll();
        foreach ($dommainesProfessionelsList as $domaineProfessionel)
        {
            $first = mb_substr($domaineProfessionel->getCodeDomaineProfessionnel(), 0, 1);
            foreach ($grandsDommainesList as $grandDomaine)
            {
                if ($grandDomaine->getCodeGrandDomaine() === $first)
                {
                    $grandDomaine->addDomainesProfessionnel($domaineProfessionel);
                    break;
                }
            }
        }
        $manager->flush();
    }
}
