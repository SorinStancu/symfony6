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
   * @Route("/admin/home", name="home")
   * @param Request             $request
   * @param UsersRepository     $users
   * @param ProductsRepository  $products
   * @param OrdersRepository    $comenzi
   * @return Response
   */
  public function home(Request $request,OrdersRepository $comenzi, UsersRepository $users, ProductsRepository $products ): Response
	  {
    $session = $request->getSession();

    $clienti = count($users->findAll());

    $produse = count($products->findBy([
      'tip'=>'prod',
      'activ'=>'da'
    ]));

      $words = ['sky', 'cloud', 'wood', 'rock', 'forest',
        'mountain', 'breeze'];


      return $this->render('admin/index.html.twig', [
      'title' => 'Useri',
      'nrproduse' => $produse,
      'nrclienti' => $clienti,
        'words' => $words,
      'comenzilt' => $comenzi->ComenziLT(),
      'comenzilc' => $comenzi->ComenziLC()
    ]);
  }

}