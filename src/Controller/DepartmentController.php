<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DepartmentController extends AbstractController
{
    /**
     * @Route("/department/{departement}", name="app_department")
     */
    public function index(string $departement, CallApiService $callApiService): Response
    {
        return $this->render('departement/index.html.twig', [
            'data' => $callApiService->getDepartmentData($departement),
        ]);
    }
}
