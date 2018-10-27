<?php

namespace App\Controller;

use App\Entity\GrandDomaine;
use App\Entity\DomaineProfessionnel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DomJobController extends AbstractController
{
    /**
     * @Route("/", name="domjob_homepage")
     */
    public function index()
    {
        /*$domaineProfessionnelRepository = $this->getDoctrine()->getRepository(DomaineProfessionnel::class);
        dump($domaineProfessionnelRepository->find(304));*/

        //$repo = $this->getDoctrine()->getRepository(GrandDomaine::class)->find(1);
        //dump($repo);
        /*dump(mb_substr($domaineProfessionnelRepository->find(304)->getCodeDomaineProfessionnel(), 0, 1));

        $grandDomaine = $repo->findOneByCodeGrandDomaine(mb_substr($domaineProfessionnelRepository->find(304)->getCodeDomaineProfessionnel(), 0, 1));
        dump($grandDomaine);

        $list = $grandDomaine->getDomainesProfessionnel();
        dump($list->count());*/



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
