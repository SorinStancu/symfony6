<?php

namespace App\Controller;

use App\Repository\ArticlesRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{
	/**
	 * @Route("admin/articles", name="articles")
	 * @param Request $request
	 * @return Response
	 */
    public function index(Request $request,ArticlesRepository $art, PaginatorInterface $paginator): Response
    {
      $articole = $art->findAll();
      $articole = $paginator->paginate(
        $articole,
        $request->query->getInt('page',1),30
      );
        return $this->render('articles/index.html.twig', [
            'name' => 'Articole',
            'articole' => $articole,
        ]);
    }
}