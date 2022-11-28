<?php

namespace App\Controller;


use App\Entity\Message;
use App\Form\MessageFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ForgotpassController extends AbstractController
{
    #[Route('/forgotpass', name: 'app_forgotpass')]
    public function index(Request $request,EntityManagerInterface $entityManager): Response
    {
        $message = new Message();
        $form = $this->createForm(MessageFormType::class, $message);
        $form->handleRequest($request);
        $successMessage= false;

        if ($form->isSubmitted() && $form->isValid()) {
            
            $entityManager->persist($message);
            $entityManager->flush();
            $successMessage= true;
        }



        return $this->render('forgotpass/index.html.twig', [
            'messageForm' => $form->createView(),
            'messageRetour' => $successMessage,
        ]);
    }
}
