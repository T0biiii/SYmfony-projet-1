<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class IndexController extends AbstractController
{
    #[Route('/index', name: 'app_index')]
    public function index(Request $request, Environment $twig, ArticleRepository $articleRepository): Response
    {
        $offset = max(0, $request->query->getInt('offset', 0));
            $paginator = $articleRepository->getArticlePaginator($offset);



            return new Response($twig->render('index/index.html.twig', [
               
                'articles' => $paginator,
                'previous' => $offset - ArticleRepository::PAGINATOR_PER_PAGE,
                'next' => min(count($paginator), $offset + ArticleRepository::PAGINATOR_PER_PAGE),

        ]));         
    }

    
       /* #[Route('/article/{id}', name: 'app_article')]
       public function show(Environment $twig, Article $article): Response
       public function show(Request $request, Environment $twig, Article $article, ArticleRepository $articleRepository): Response
        {
            return new Response($twig->render('index/show.html.twig', [
                'article' => $article,
                'articles' => $ArticleRepository->findBy(['article' => $article]),
            ]));
        }
*/
        
    

    
    # {
     #   return $this->render('index/index.html.twig', [
      #      'controller_name' => 'IndexController',
      #  ]);
    # }
} 
