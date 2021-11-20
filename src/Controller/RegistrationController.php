<?php

namespace App\Controller;

use App\DTO\UserDTO;
use App\Form\Type\RegistrationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/registration")
 */
class RegistrationController extends AbstractController
{
    /**
     * @Route("/", name="app.registration")
     */
    public function registrationAction(Request $request): Response
    {
        $userDTO = new UserDTO();

        $form = $this->createForm(RegistrationType::class, $userDTO, [
            'action' => $this->generateUrl('app.registration')
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

        }

        return $this->renderForm('app/registration.html.twig', [
            'form' => $form
        ]);
    }
}