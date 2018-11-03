<?php

namespace App\Controller;

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
    public function             viewAction($id, ObjectManager $manager)
    {
        $advert                 = $manager->find(Advert::class, $id);

        if (!$advert) {
            throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
        }

        //$listApplications = $em->getRepository('DomJobPlatformBundle:Application')->findBy(['advert' => $advert]);
        //$listAdvertSkills = $em->getRepository('DomJobPlatformBundle:AdvertSkill')->findBy(['advert' => $advert]);
        dump($advert);
        return ($this->render('advert/view.html.twig', [
            'advert' => $advert,
            //'listApplications' => $listApplications,
            //'listAdvertSkills' => $listAdvertSkills,
        ]));
    }
    
    /**
     * @Route("/les-offres/ajouter-une-offre-d-emploi", name="advert_add")
     * @Route("/les-offres/{id}/edition", name="advert_edit")
     */
    public function advertFormAction(Advert $advert = null, Request $request, ObjectManager $manager)
    {
        !$advert ? $advert = new Advert() : 0;
        $form = $this->createForm(AdvertType::class, $advert);
        
        $form->handleRequest($request);
        if (isset($request->request->get('advert')["DomaineProfessionnel"]) )
        {
            $domaineProfessionelId = $request->request->get('advert')["DomaineProfessionnel"];
            $domaineProfessionel = $manager->find(DomaineProfessionnel::class, $domaineProfessionelId);
            $advert->setDomaineProfessionel($domaineProfessionel);
        }
        dump($advert);
        if ($form->isSubmitted() && $form->isValid() && $advert->getDomaineProfessionel())
        {
            !$advert->getId() ? $advert->setCreatedAt(new \DateTime) : 0;
            $manager->persist($advert);
            $manager->flush();
            return ($this->redirectToRoute('advert_view', ['id' => $advert->getId()]));
        }
        return ($this->render('advert/add.html.twig', [
            'advertForm' => $form->createView(),
            'editMode' => $advert->getId(),
            'domainesProfessionelsList' => $manager->getRepository(DomaineProfessionnel::class)->findBy(["grandDomaine" => $advert->getGrandDomaine()]),
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
        
        /*public function             viewSlugAction($slug, $year, $_format)
        {
            return new Response(
                "On pourrait afficher l'annonce correspondant au
                slug '".$slug."', créée en ".$year." et au format ".$_format."."
            );
        }*/
        
        /*public function             editAction($id, Request $request)
        {
            $em                       = $this->getDoctrine()->getManager();
            $advert                   = $em->find('DomJobPlatformBundle:Advert', $id);
            
            if (!$advert)
            {
                throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
            }
            $listCategories = $em->getRepository('DomJobPlatformBundle:Category')->findAll();
            foreach($listCategories as $category) {
                $advert->addCategory($category);
            }
            $em->flush();
            return $this->render('advert/edit.html.twig', ['advert' => $advert]);
        }
        
        public function             editImageAction($advertId)
        {
            $em                     = $this->getDoctrine()->getManager();
            $advert                 = $em->find('DomJobPlatformBundle:Advert', $advertId);
            
            $advert->getImage()->setUrl('test.png');
            $em->flush();
            return $this->redirectToRoute('dj_platform_view', ['id' => $advert->getId()]);
        }*/
    }
    