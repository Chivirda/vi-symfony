<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     *
     * @return Response
     */
    public function indexAction(): Response
    {
        return $this->render('base.html.twig', [
            'hello' => 'Hello, World!'
        ]);
    }

    /**
     * @Route ("/print-your-name/{name}")
     *
     * @return Response
     */
    public function printYourNameAction($name): Response
    {
        return new Response(sprintf('Hello, %s!', $name));
    }
}