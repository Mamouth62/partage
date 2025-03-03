<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BaseController extends AbstractController
{
    #[Route('/mamie2', name: 'app_base')]
    public function index(): Response
    {
        return $this->render('base/index.html.twig', [
        ]);
    }
}
