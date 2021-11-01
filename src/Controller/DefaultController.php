<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /**
     * @Route("/")
     *
     * @return Response
     */
    public function indexAction(): Response
    {
        return new Response('Hello, World!');
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