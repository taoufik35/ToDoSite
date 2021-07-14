<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ToDoController extends AbstractController
{
     /**
     * @Route("/", name="index")
     * @Route("/front", name="front")
     */
    public function index(): Response
    {
        return $this->render('to_do/index.html.twig', [
            'controller_name' => 'ToDoController',
        ]);
    }
}
