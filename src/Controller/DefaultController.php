<?php

namespace App\Controller;

use App\Repository\AdminRepository;
use App\Repository\DesignadmRepository;
use App\Repository\LanguageRepository;
use App\Repository\OrdersRepository;
use App\Repository\PaginiRepository;
use App\Repository\ReviewRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
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
      $cache = new FilesystemAdapter();



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
		    $ad = $admin->find('1');
		    $session->set('site',$ad->getSite());
		    $session->set('template',$ad->getTemplate());
		    $session->set('galerie',$ad->getGalerie());
		    $session->set('news',$ad->getNews());
		    $session->set('multilingv',$ad->getMultilingv());
	    }

      $pag = $cache->getItem('pag');
      if (!$pag->isHit()) {
        $pag->set($pagini->getPagini('da','da','magazin'));
        $cache->save($pag);
      }


        $response = $this->render('layoutadm/_pagini.html.twig', [
            'pagini' => $pag->get(),
        ]);
        $response->setPublic();
        $response->setMaxAge(36000);
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
      $cache = new FilesystemAdapter();

      $setses = $cache->getItem('setare.ses');
      if (!$setses->isHit()) {
        $setses->set($designadm->find('1'));
        $cache->save($setses);
      }
      $setses = $setses->get();

      $comenzinoi = $cache->getItem('setare.comenzinoi');
      if (!$comenzinoi->isHit()) {

        $comenzinoi->set($comenzi->afComenziNoi());

        $cache->save($comenzinoi);
      }

      $rewnoi = $cache->getItem('setare.rewnoi');
      if (!$rewnoi->isHit()) {

        $rewnoi->set($rev->RewNoi());

        $cache->save($rewnoi);
      }

      $langs = $cache->getItem('langs');
      if (!$langs->isHit()) {

        $langs->set($lang->afisareLang());

        $cache->save($langs);
      }


			$response = $this->render('layoutadm/_header.html.twig', [
				'avatar' => $setses->getAvatar(),
				'post' => $setses->getPost(),
				'style_site' => $setses->getStyleSite(),
				'style_admin' => $setses->getStyleAdmin(),
				'comnoi' => $comenzinoi->get(),
				'revnoi' => $rewnoi->get(),
				'afisarelang' => $langs->get(),
			]);
			$response->setPublic();
			$response->setMaxAge(36000);
			return $response;
		}
}