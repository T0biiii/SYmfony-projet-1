<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class DetailsController extends AbstractController
{
    #[Route('/details', name: 'app_details')]
    public function details(Request $request, Environment $twig, ArticleRepository $articleRepository): Response
    {
        return $this->render('details/index.html.twig', [
            'controller_name' => 'DetailsController',
            'articles' => $articleRepository->findAll(),
        ]);
    }

    #[Route('/article/{id}', name: 'app_article')]
    public function show(Environment $twig, Article $article): Response
    //public function show(Request $request, Environment $twig, Article $article, ArticleRepository $articleRepository): Response
     {
         return new Response($twig->render('details/index.html.twig', [
             'article' => $article,
             
         ]));
     }

}
