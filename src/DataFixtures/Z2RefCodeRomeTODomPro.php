<?php

namespace App\DataFixtures;

use App\Entity\ReferentielCodeRome;
use App\Entity\DomaineProfessionnel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Z2RefCodeRomeTODomPro extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $referentielCodeRomeList = $manager->getRepository(ReferentielCodeRome::class)->findAll();
        $domainesProfessionelsList = $manager->getRepository(DomaineProfessionnel::class)->findAll();
        foreach ($referentielCodeRomeList as $referentielCodeRome)
        {
            $first = mb_substr($referentielCodeRome->getCodeRome(), 0, 3);
            foreach ($domainesProfessionelsList as $domaineProfessionel)
            {
                if ($domaineProfessionel->getCodeDomaineProfessionnel() === $first)
                {
                    $domaineProfessionel->addReferentielCodeRome($referentielCodeRome);
                    break;
                }
            }
        }
        $manager->flush();
    }
}
