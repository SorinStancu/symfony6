<?php
	
	namespace App\Controller;
	
	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use Symfony\Component\Routing\Annotation\Route;
	
	class AppController extends AbstractController
	{
		/**
		 * @Route("/adm", name="adm")
		 */
		public function index()
			{
				return $this->render('admin/index.html.twig',[
					'user'=> $this->getUser()
				]);
			}
	}