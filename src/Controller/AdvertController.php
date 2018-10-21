<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Doctrine\Common\Persistence\ObjectManager;

class AdvertController extends AbstractController
{
    /**
     * @Route("/les-offres/{page}", name="advert_homepage", requirements={"page": "\d+"}, defaults={"page": "1"})
     */
    public function             indexAction($page)
    {
        //dump(json_decode(file_get_contents('/Users/dlavaury/symphony_dev/Symphony/web/codes-postaux.json'), true));
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
    /*public function             viewAction($id, ObjectManager $em)
    {
        $em                     = $this->getDoctrine()->getManager();
        $advert                 = $em->find('DomJobPlatformBundle:Advert', $id);

        if (null === $advert) {
            throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
        }

        $listApplications = $em->getRepository('DomJobPlatformBundle:Application')->findBy(['advert' => $advert]);
        $listAdvertSkills = $em->getRepository('DomJobPlatformBundle:AdvertSkill')->findBy(['advert' => $advert]);
        return ($this->render('advert/view.html.twig', [
            'advert' => $advert,
            'listApplications' => $listApplications,
            'listAdvertSkills' => $listAdvertSkills,
        ]));
    }

    /*public function             viewSlugAction($slug, $year, $_format)
    {
        return new Response(
            "On pourrait afficher l'annonce correspondant au
            slug '".$slug."', créée en ".$year." et au format ".$_format."."
        );
    }

    public function             addAction(Request $request)
    {
        $em                     = $this->getDoctrine()->getManager();
        $advert                 = new Advert();

        // initialisation de l'annonce
        $advert->setTitle('Recherche développeur Symfony.');
        $advert->setAuthor('Alexandre');
        $advert->setContent("Nous recherchons un développeur Symfony débutant aux abymes.");

        $listSkills = $em->getRepository('DomJobPlatformBundle:Skill')->findAll();
        foreach ($listSkills as $skill)
        {
            $advertSkill = new AdvertSkill();
            $advertSkill->setAdvert($advert);
            $advertSkill->setSkill($skill);
            $advertSkill->setLevel('Debutant');
            $em->persist($advertSkill);
        }

        // initialisation de l'image
        $image = new Image();
        $image->setUrl('http://sdz-upload.s3.amazonaws.com/prod/upload/job-de-reve.jpg');
        $image->setAlt('Job de rêve');

        // lien annonce / image
        $advert->setImage($image);

        // initialisation des candidatures
        $application1 = new Application();
        $application1->setAuthor('Marine');
        $application1->setContent("J'ai toutes les qualités requises.");

        // Création d'une deuxième candidature par exemple
        $application2 = new Application();
        $application2->setAuthor('Pierre');
        $application2->setContent("Je suis très motivé.");

        // On lie les candidatures à l'annonce
        $application1->setAdvert($advert);
        $application2->setAdvert($advert);

        $em = $this->getDoctrine()->getManager();
        $em->persist($advert);
        $em->persist($application1);
        $em->persist($application2);
        $em->flush();

        if ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');
            return $this->redirectToRoute('dj_platform_view', ['id' => $advert->getId()]);
        }
        return $this->render('advert/add.html.twig');
    }

    public function             editAction($id, Request $request)
    {
        $em                     = $this->getDoctrine()->getManager();
        $advert                 = $em->find('DomJobPlatformBundle:Advert', $id);

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
        $em = $this->getDoctrine()->getManager();

        $advert = $em->find('DomJobPlatformBundle:Advert', $advertId);

        $advert->getImage()->setUrl('test.png');

        $em->flush();

        return $this->redirectToRoute('dj_platform_view', ['id' => $advert->getId()]);
    }

    public function             deleteAction($id)
    {
        $em                     = $this->getDoctrine()->getManager();
        $advert                 = $em->find('DomJobPlatformBundle:Advert', $id);

        if (!$advert)
        {
            throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
        }

        foreach ($advert->getCategories() as $category)
        {
            $advert->removeCategory($category);
        }
        $em->flush;
        return ($this->redirectToRoute('advert_homepage'));
    }*/

    public function             menuAction()
    {
        $listAdverts            = [
            ['id' => 12, 'title' => 'Recherche développeur Symfony', 'date' => '10/10/10', 'type' => 'developer', 'content' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci.'],
            ['id' => 11, 'title' => 'Mission de webmaster', 'date' => '10/10/10', 'type' => 'developer', 'content' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci.'],
            ['id' => 10, 'title' => 'Offre de stage webdesigner', 'date' => '10/10/10', 'type' => 'developer', 'content' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci.']
        ];

        return $this->render('advert/menu.html.twig', ['listAdverts' => $listAdverts]);
    }
}
