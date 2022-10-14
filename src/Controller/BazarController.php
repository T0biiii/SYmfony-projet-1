<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class BazarController extends AbstractController
{
    #[Route('/bazar', name: 'app_bazar')]
    public function bazar(Request $request, Environment $twig, ArticleRepository $articleRepository): Response
    {
        return $this->render('bazar/index.html.twig', [
            'controller_name' => 'BazarController',
            'articles' => $articleRepository->findAll(),
        ]);
    }

    #[Route('/article/{id}', name: 'app_article')]
    #public function show(Environment $twig, Article $article): Response
    public function show(Request $request, Environment $twig, Article $article, ArticleRepository $articleRepository): Response
     {
         return new Response($twig->render('bazar/index.html.twig', [
             'articles' => $article,
             'articles' => $ArticleRepository->findBy(['article' => $article]),
         ]));
     }

}


