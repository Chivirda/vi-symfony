<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LeapYearController
{
    /**
     * @Route ("/is-leap-year/{year}")
     */
    public function isLeapYearAction($year): Response
    {
        $response = $this->isLeapYear($year) ? 'Yep, this is a leap year!' : 'Nope, this is not a leap year!';
        return new Response($response);
    }

    private function isLeapYear($year): bool
    {
        if ($year === null) {
            $year = date('Y');
        }

        return ($year % 400 === 0) || ($year % 4 === 0 && $year % 100 !== 0);
    }
}