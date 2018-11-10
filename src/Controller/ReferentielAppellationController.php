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
    public function find(Request $request, ReferentielAppellationRepository $repository)
    {
        $refAppList = $repository->findByTerm($request->query->get('term'), 20);
        foreach ($refAppList as $key => $refApp)
        {
            $refAppList[$key]['value'] = $refAppList[$key]["libelleAppellationCourt"];
            //dump($refApp);die;
        }
        //dump($refAppList); die;
        return new JsonResponse($refAppList);
    }
}
