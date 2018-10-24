<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\GrandDomaine;

class DomJobController extends AbstractController
{
    /**
     * @Route("/", name="domjob_homepage")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(GrandDomaine::class);
        $grandDomaine = $repo->findOneByCodeGrandDomaine('A');
        dump($grandDomaine);
        $list = $grandDomaine->getDomainesProfessionnel();
        dump($list->count());
        return $this->render('dom_job/index.html.twig', [
            'controller_name' => 'DomJobController',
        ]);
    }

    /**
     * @Route("/contact", name="domjob_contact")
     */
    public function contactAction(Request $request)
    {
        $session = $request->getSession();
        $session->getFlashBag()->add('Message flash', 'La page de contact n\'est pas encore disponible, merci de revenir plus tard!');
        return ($this->redirectToROute('domjob_homepage'));
    }
}
