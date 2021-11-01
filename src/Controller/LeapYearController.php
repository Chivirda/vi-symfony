<?php

namespace App\Controller;

use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LeapYearController extends AbstractController
{
    /**
     * @Route ("/is-leap-year/{year}")
     */
    public function isLeapYearAction($year): Response
    {
        $response = $this->isLeapYear($year) ? 'Yep, this is a leap year!' : 'Nope, this is not a leap year!';
        return $this->render('leap_year/leap_year.html.twig', [
            'response' => $response
        ]);
    }

    private function isLeapYear($year): bool
    {
        if ($year === null) {
            $year = date('Y');
        }

        return ($year % 400 === 0) || ($year % 4 === 0 && $year % 100 !== 0);
    }
}