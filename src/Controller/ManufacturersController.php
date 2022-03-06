<?php

namespace App\Controller;

use App\Repository\ManufacturersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManufacturersController extends AbstractController
{
    /**
     * @Route("/admin/producatori", name="producatori")
     */
    public function index(): Response
    {

        return $this->render('admin/producatori.html.twig', [
            'controller_name' => 'ManufacturersController',
        ]);
    }

  /**
   * @Route("/api/producatori", name="apiproducatori")
   * @param ManufacturersRepository $manufacturer
   * @return Response
   */
  public function api(ManufacturersRepository $manufacturer): Response
    {

      return $this->json( $manufacturer->afProducatori());
    }
}