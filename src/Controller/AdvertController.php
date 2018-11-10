<?php

namespace App\Controller;

use App\Entity\Texte;
use App\Entity\Advert;
use App\Form\AdvertType;
use App\Entity\GrandDomaine;
use App\Entity\ReferentielCodeRome;
use App\Entity\DomaineProfessionnel;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class AdvertController extends AbstractController
{
    /**
     * @Route("/les-offres/{page}", name="advert_homepage", requirements={"page": "\d+"}, defaults={"page": "1"})
     */
    public function             indexAction($page, ObjectManager $manager)
    {
        if ($page < 1) {
            throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
        }
        $listAdverts = [
            [
              'title'   => 'Recherche développpeur Symfony',
              'id'      => 1,
              'author'  => 'Alexandre',
              'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
              'date'    => new \Datetime()
            ],
            [
              'title'   => 'Mission de webmaster',
              'id'      => 2,
              'author'  => 'Hugo',
              'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
              'date'    => new \Datetime()
            ],
            [
              'title'   => 'Offre de stage webdesigner',
              'id'      => 3,
              'author'  => 'Mathieu',
              'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
              'date'    => new \Datetime()
            ],
        ];
        return $this->render('advert/index.html.twig', ['listAdverts' => $listAdverts]);
    }

    /**
     * @Route("/les-offres/offre-{id}", name="advert_view", requirements={"id": "\d+"})
     */
    public function             viewAction(Advert $advert = null, ObjectManager $manager)
    {
        if (!$advert) {
            throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
        }
        dump($advert);
        //$codeRome = $manager->find(ReferentielCodeRome::class, $advert->getReferentielCodeRome()->getId())->getCodeRome();
        //dump($codeRome);
        return ($this->render('advert/view.html.twig', [
            'advert' => $advert,
            //'textes' => $manager->getRepository(Texte::class)->findByCodeRome($codeRome),
        ]));
    }
    
    /**
     * @Route("/les-offres/ajouter-une-offre-d-emploi", name="advert_add")
     * @Route("/offre/{id}/edition", name="advert_edit")
     * @IsGranted("ROLE_RECRUITER")
     */
    public function advertFormAction(Advert $advert = null, Request $request, ObjectManager $om)
    {
        !$advert ? $advert = new Advert() : 0;
        $form = $this->createForm(AdvertType::class, $advert);
        $form->handleRequest($request);
        dump($request->request);
        if ($form->isSubmitted() && $form->isValid())
        {
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
        public function             deleteAction(Advert $advert = null, ObjectManager $manager)
        {
            if (!$advert)
            {
                throw new NotFoundHttpException("L'annonce n°".$id." n'existe pas.");
            }
            $manager->remove($advert);
            $manager->flush();
            return ($this->redirectToRoute('advert_homepage'));
        }
        
        public function             menuAction()
        {
            $listAdverts            = [
                ['id' => 12, 'title' => 'Recherche développeur Symfony', 'date' => '10/10/10', 'type' => 'developer', 'content' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci.'],
                ['id' => 11, 'title' => 'Mission de webmaster', 'date' => '10/10/10', 'type' => 'developer', 'content' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci.'],
                ['id' => 10, 'title' => 'Offre de stage webdesigner', 'date' => '10/10/10', 'type' => 'developer', 'content' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci.']
            ];
            
            return $this->render('advert/menu.html.twig', ['listAdverts' => $listAdverts]);
        }
        
        public function             editImageAction($advertId)
        {
            $em                     = $this->getDoctrine()->getManager();
            $advert                 = $em->find('DomJobPlatformBundle:Advert', $advertId);
            
            $advert->getImage()->setUrl('test.png');
            $em->flush();
            return $this->redirectToRoute('dj_platform_view', ['id' => $advert->getId()]);
        }
}