<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ProductsRepository;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'app_search')]
    public function search(Request $request, ProductsRepository $productsRepository)
    {
        $query = $request->query->get('q');
        $products = $productsRepository->findBySearchQuery($query);

        return $this->render('search/results.html.twig', [
            'products'=> $products,
            'query'=> $query,
        ]);
    }
}
