<?php

namespace App\Controller;

use App\Entity\City;
use App\Entity\Texte;
use App\Entity\Advert;
use App\Form\AdvertType;
use App\Entity\GrandDomaine;
use App\Entity\ReferentielCodeRome;
use App\Entity\DomaineProfessionnel;
use App\Entity\ReferentielAppellation;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends AbstractController
{
    /**
     * @Route("/les-offres", name="advert_homepage")
     */
    public                  function indexAction(Request $request, ObjectManager $om)
    {
        $listAdverts = $om->getRepository(Advert::class)->getAdvertsWithFilters($request);
        dump($listAdverts);
        return $this->render('advert/index.html.twig', [
            'listAdverts' => $listAdverts->getQuery()->getArrayResult(),
            'totalItem' => $listAdverts->count(),
        ]);
    }

    /**
     * @Route("/les-offres/offre-{id}", name="advert_view", requirements={"id": "\d+"})
     * @IsGranted("ROLE_USER")
     */
    public function         viewAction($id = null, ObjectManager $om)
    {
        $advert             = $om->getRepository(Advert::class)->getAdvertWithRelations($id);

        if (!$advert) {
            throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
        }
        dump($advert);
        return ($this->render('advert/view.html.twig', ['advert' => $advert]));
    }
    
    /**
     * @Route("/les-offres/ajouter-une-offre-d-emploi", name="advert_add")
     * @Route("/offre/{id}/edition", name="advert_edit")
     * @IsGranted("ROLE_RECRUITER")
     */
    public function         advertFormAction($id = null, Request $request, ObjectManager $om)
    {
        $advert             = ($id ? $om->getRepository(Advert::class)->getAdvertWithRelations($id) : new Advert());
        $form               = $this->createForm(AdvertType::class, $advert);
        $form->handleRequest($request);
        dump($request->request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $request->request->get("codeOgr") ? $advert->setReferentielAppellation($om->find(ReferentielAppellation::class, $request->request->get("codeOgr"))) : 0;
            $request->request->get("city-id") ? $advert->setCity($om->find(City::class, $request->request->get("city-id"))) : 0;
            !$advert->getId() ? $advert->setCreatedAt(new \DateTime) : 0;
            !$advert->getId() ? $advert->setUser($this->getUser()) : 0;
            $om->persist($advert);
            $om->flush();
            return ($this->redirectToRoute('advert_view', ['id' => $advert->getId()]));
        }
        return ($this->render('advert/add.html.twig', [
            'advertForm' => $form->createView(),
            'editMode' => $advert->getId(),
        ]));
    }
        
        /**
         * @Route("/les-offres/delete/{id}", name="advert_delete")
         */
        public function     deleteAction(Advert $advert = null, ObjectManager $manager)
        {
            if (!$advert)
            {
                throw new NotFoundHttpException("L'annonce n°".$id." n'existe pas.");
            }
            $manager->remove($advert);
            $manager->flush();
            return ($this->redirectToRoute('advert_homepage'));
        }
        
        public function     menuAction(ObjectManager $om)
        {
            $listAdverts    = $om->getRepository(Advert::class)->getLastAdvertsWithRelations();
            
            return $this->render('advert/menu.html.twig', ['listAdverts' => $listAdverts]);
        }
        
        public function     editImageAction($advertId)
        {
            $em             = $this->getDoctrine()->getManager();
            $advert         = $em->find('DomJobPlatformBundle:Advert', $advertId);
            
            $advert->getImage()->setUrl('test.png');
            $em->flush();
            return $this->redirectToRoute('dj_platform_view', ['id' => $advert->getId()]);
        }
}