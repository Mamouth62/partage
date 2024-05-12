<?php

namespace App\Controller;

use App\Repository\CategoriesRepository;
use App\Entity\Images;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BaseController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(CategoriesRepository $categoriesRepository): Response
    {
        return $this->render('base/index.html.twig', [
            'categories'=> $categoriesRepository->findBy([], ['categoryOrder'=> 'asc']),
        ]);
        
    }
}