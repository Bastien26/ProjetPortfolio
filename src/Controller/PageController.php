<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'app_page')]
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
    #[Route('/CV', name: 'CV')]
    public function CV(): Response
    {
        return $this->render('page/CV.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
    #[Route('/Portfolio', name: 'Portfolio')]
    public function Portfolio(): Response
    {
        return $this->render('page/Portfolio.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
    #[Route('/CDU', name: 'CDU')]
    public function CDU(): Response
    {
        return $this->render('page/Portfolio.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
    #[Route('/En_savoir_plus', name: 'ESP')]
    public function ESP(): Response
    {
        return $this->render('page/ESP.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
}
