<?php

namespace App\Controller;

use App\Repository\OrdersRepository;
use App\Repository\StatusRepository;
use App\Repository\UsersRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrdersController extends AbstractController
{
	/**
	 * @Route("/admin/orders", name="orders")
	 * @param OrdersRepository   $comenzi
	 * @param PaginatorInterface $paginator
	 * @param Request            $request
	 * @param StatusRepository   $status
	 * @param UsersRepository    $users
	 * @return Response
	 */
    public function index(OrdersRepository $comenzi,PaginatorInterface $paginator, Request $request, StatusRepository $status,UsersRepository $users): Response
    {


	    $comenzigrup = $paginator->paginate(
        $comenzi->afComenzi(),
        $request->query->getInt('page',1),20
	    );

	      $statusuri = $status->afStatus('com');

        return $this->render('admin/orders.html.twig', [
	        'comenzigrup' => $comenzigrup ,
	        'statusuri' => $statusuri
        ]);
    }
}