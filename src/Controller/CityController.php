<?php

namespace App\Controller;

use App\Repository\CityRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CityController extends AbstractController
{
    /**
     * @Route("/city", name="city")
     */
    public function initial(Request $request, CityRepository $repository)
    {
        if ($request->isMethod('GET') && $request->query->get('term'))
        {
            if (ctype_digit($request->query->get('term')))
            {
                return new JsonResponse($repository->findByPostalCode($request->query->get('term'), 15));
            }
            else
            {
                return new JsonResponse($repository->findByTerm($request->query->get('term'), 15));
            }
        }
    }
}
