<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManufacturersController extends AbstractController
{
    /**
     * @Route("/manufacturers", name="manufacturers")
     */
    public function index(): Response
    {
        return $this->render('manufacturers/users.html.twig', [
            'controller_name' => 'ManufacturersController',
        ]);
    }
}
