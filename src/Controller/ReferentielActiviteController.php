<?php

namespace App\Controller;

use App\Entity\ReferentielActivite;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ReferentielActiviteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class ReferentielActiviteController extends AbstractController
{
    /**
     * @Route("/referentiel-activite", name="referentielActivite")
     */
    /*public function find(Request $request, ReferentielActiviteRepository $repository)
    {
        return new JsonResponse($repository->findByTerm($request->query->get('term'), 30));
    }*/
}
