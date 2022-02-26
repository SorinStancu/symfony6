<?php

namespace App\Controller;

use App\Repository\AdminRepository;
use App\Repository\DesignadmRepository;
use App\Repository\LanguageRepository;
use App\Repository\OrdersRepository;
use App\Repository\PaginiRepository;
use App\Repository\ReviewRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
	/**
	 * @Route("/default", name="default")
	 * @param Request             $request
	 * @param PaginiRepository    $pagini
	 * @param DesignadmRepository $designadmRepository
	 * @param AdminRepository     $admin
	 * @param LanguageRepository  $lang
	 * @return \Symfony\Component\HttpFoundation\Response Response
	 */
    public function index(Request $request,PaginiRepository $pagini,  AdminRepository $admin,LanguageRepository $lang): \Symfony\Component\HttpFoundation\Response
    {
    	
	    $session = $request->getSession();
	    
	    
		    if($idlang = $request->query->get('id_lang'))
		    {
			    $setlang = $lang->lang($idlang);
			    $session->set('id_lang', $setlang->getId());
			    $session->set('presc_lang', $setlang->getPresc());
			    $session->set('lang', $setlang->getLimba());
		    }
		    else
		    {
			    $setlang = $lang->lang('1');
			    $session->set('id_lang', $setlang->getId());
			    $session->set('presc_lang', $setlang->getPresc());
			    $session->set('lang', $setlang->getLimba());
		    }
	    
	    
	    
	    if($session->get('site')=== null)
	    {
		    /*$q = $this->getDoctrine()->getManager();
		    $query = 'SELECT * FROM admin ';
		    $statement = $q->getConnection()->prepare($query);
		    $statement->execute();
		    $r = $statement->fetch();*/
		    $ad = $admin->find('1');
		    $session->set('site',$ad->getSite());
		    $session->set('template',$ad->getTemplate());
		    $session->set('galerie',$ad->getGalerie());
		    $session->set('news',$ad->getNews());
		    $session->set('multilingv',$ad->getMultilingv());
	    }
	    
	      $pag = $pagini->getPagini('da','da','magazin');
	    
        $response = $this->render('layoutadm/_pagini.html.twig', [
            'pagini' => $pag,
        ]);
        $response->setPublic();
        $response->setMaxAge(1200);
        return $response;
    }
	
	/**
	 * @param Request             $request
	 * @param DesignadmRepository $designadm
	 * @param OrdersRepository    $comenzi
	 * @param ReviewRepository    $rev
	 * @param LanguageRepository  $lang
	 * @return Response
	 */
	public function header(Request $request, DesignadmRepository $designadm,OrdersRepository $comenzi, ReviewRepository $rev, LanguageRepository $lang)
		{
			
			$setses = $designadm->find('1');
			
			$response = $this->render('layoutadm/_header.html.twig', [
				'avatar' => $setses->getAvatar(),
				'post' => $setses->getPost(),
				'style_site' => $setses->getStyleSite(),
				'style_admin' => $setses->getStyleAdmin(),
				'comnoi' => $comenzi->afComenziNoi(),
				'revnoi' => $rev->RewNoi(),
				'afisarelang' => $lang->afisareLang(),
			]);
			$response->setPublic();
			$response->setMaxAge(1200);
			return $response;
		}
}