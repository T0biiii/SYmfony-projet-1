<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{
    #[Route('/articles', name: 'app_articles')]

    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'ArticlesController',
        ]);
    }
}
