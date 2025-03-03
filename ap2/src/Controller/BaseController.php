<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\UserRepository;

class BaseController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(): Response
    {
        return $this->render('base/index.html.twig', [

        ]);
    }
    #[Route('/liste-utilisateur', name: 'app_liste_utilisateur')]
    public function listeUtilisateur(UserRepository $userRepository): Response
    {
        $utilisateurs = $UserRepository->findAll();
        return $this->render('utilisateur/liste-utilisateurs.html.twig', [
            'utilisateurs' => $utilisateurs,
        ]);
    }
}
