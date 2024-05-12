<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Entity\Images;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/categories', name: 'categories_')]
class CategoriesController extends AbstractController
{
    #[Route('/{slug}', name: 'list')]
    public function index(Categories $category): Response
    {
        $products = $category->getProducts();


        return $this->render('categories/list.html.twig', compact('category', 'products'));
        
    }
}
