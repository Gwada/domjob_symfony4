<?php

namespace App\DataFixtures;

use App\Entity\CoherenceItem;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CoherenceItemFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $listCoherenceItem = json_decode(file_get_contents('src/JsonData/coherence_item.json'), true);

        foreach($listCoherenceItem as $coherenceItem)
        {
            $item = new CoherenceItem();
            $item->setCodeRome($coherenceItem["code_rome"])
                ->setCodeOgr($coherenceItem["code_ogr"]);

            $manager->persist($item);
        }
        $manager->flush();
    }
}
