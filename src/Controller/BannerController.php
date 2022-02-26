<?php

namespace App\Controller;

use App\Repository\BannerRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class BannerController extends AbstractController
{
	/**
	 * @Route("/admin/banner", name="banner")
	 * @param Request            $request
	 * @param BannerRepository   $bann
	 * @param PaginatorInterface $paginator
	 * @return Response
	 */
    public function index(Request $request,BannerRepository $bann, PaginatorInterface $paginator): Response
    {
    	$ban = $bann->afBanner();
	    $ban = $paginator->paginate(
		    $ban,
		    $request->query->getInt('page',1),30
	    );
        return $this->render('admin/banner.html.twig', [
            'ban' =>  $ban
        ]);
    }
}