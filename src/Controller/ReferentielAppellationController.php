<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\ReferentielAppellationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReferentielAppellationController extends AbstractController
{
    /**
     * @Route("/referentiel-appellation", name="referentielAppellation")
     */
    public function basic(Request $request, ReferentielAppellationRepository $repository)
    {
        if ($request->isMethod('GET') && $request->query->get('term'))
        {
            return new JsonResponse($repository->findByTerm(explode(' ', $request->query->get('term')), 30));
        }
    }
}
