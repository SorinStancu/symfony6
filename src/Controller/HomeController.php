<?php

namespace App\Controller;

use App\Repository\LanguageRepository;
use App\Repository\OrdersRepository;
use App\Repository\PaginiRepository;
use App\Repository\ProductsRepository;
use App\Repository\ReviewRepository;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\AdminRepository;


class HomeController extends AbstractController
{


  /**
   * @Route("/", name="home")
   * @param Request             $request
   * @param UsersRepository     $usersRepository
   * @param ProductsRepository  $productsRepository
   * @param PaginiRepository    $pagini
   * @param OrdersRepository    $comenzi
   * @param ReviewRepository    $rev
   * @return Response
   */
  public function home(Request $request,OrdersRepository $comenzi, UsersRepository $usersRepository, ProductsRepository $productsRepository ): Response
	  {
    $session = $request->getSession();

    $clienti = count($usersRepository->findAll());

    $produse = count($productsRepository->findBy([
      'tip'=>'prod',
      'activ'=>'da'
    ]));




      return $this->render('admin/index.html.twig', [
      'title' => 'Useri',
      'nrproduse' => $produse,
      'nrclienti' => $clienti,
      'comenzilt' => $comenzi->ComenziLT(),
      'comenzilc' => $comenzi->ComenziLC()
    ]);
  }

}