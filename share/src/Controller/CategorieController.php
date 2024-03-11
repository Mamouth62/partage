<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategorieRepository;
use App\Entity\Categorie;
use App\Form\CategorieType;

class CategorieController extends AbstractController
{
    #[Route('/modifier-categorie', name: 'app_modifier_categorie')]
    public function modifierCategorie(): Response
    {
        return $this->render('categorie/modifierCategorie.html.twig', [
        ]);
    }
}
