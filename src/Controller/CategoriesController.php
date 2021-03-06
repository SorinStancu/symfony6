<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoriesController extends AbstractController
{
	/**
	 * @Route("admin/categories", name="categories")
	 * @param Request $request
	 * @return Response
	 */
    public function index(Request $request): Response
    {

        return $this->render('admin/categories.html.twig', [
            'name' => 'Categories',
        ]);
    }
}