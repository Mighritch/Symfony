<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        // Redirection vers la liste des événements (ou catégories si préféré)
        return $this->redirectToRoute('event_index');
        
        // Alternative : Afficher un template dédié
        // return $this->render('home/index.html.twig');
    }
}