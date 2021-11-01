<?php

namespace App\Controller\Order;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route ("/order")
 */
class OrderController
{
    /**
     * @Route ("/show/{id}")
     */
    public function showOrderAction($id): Response
    {
        return new Response('Order: ' . $id);
    }
}