<?php

namespace App\Controller;

use App\Entity\Pagini;
use App\Repository\PaginiRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaginiController extends AbstractController
{
	/**
	 * @Route("/pagina-{id}", methods="GET|POST", name="pagina")
	 * @param PaginiRepository $pagini
	 * @param                  $id
	 * @param Request          $request
	 * @return Response
	 */
    public function index(EntityManagerInterface $em,PaginiRepository $pagini, $id, Request $request): Response
    {
	    $session = $request->getSession();
      $pagg = new Pagini();

      $p = $pagini->find($id);
	    $txt = html_entity_decode($p->getText());

	    $form = $this->createFormBuilder($pagg)
	      ->setAction($this->generateUrl('pagina',['id'=>$id]))
		    ->add('idp', HiddenType::class, array(
			    'data' => $p->getIdp()
		    ))
		    ->add('lang_id', HiddenType::class, array(
			    'data' => $p->getLangId()
		    ))
		    ->add('tip', HiddenType::class, array(
			    'data' => $p->getTip()
		    ))
		    ->add('codp', HiddenType::class, array(
			    'data' => $p->getCodp()
		    ))
		    ->add('producator', HiddenType::class, array(
			    'data' => $p->getProducator()
		    ))
		    ->add('status', HiddenType::class, array(
			    'data' => $p->getStatus()
		    ))
		    ->add('loc', HiddenType::class, array(
			    'data' => $p->getLoc()
		    ))
		    ->add('poz', HiddenType::class, array(
			    'data' => $p->getPoz()
		    ))
		    ->add('img', HiddenType::class, array(
			    'data' => '-'
		    ))
		    ->add('pdf', HiddenType::class, array(
			    'data' => '-'
		    ))

        ->add('name', TextType::class, array(
          'required'=>false,
          'label' => false,
	        'data' => $p->getName(),
          'attr'=>array(
            'class'=>'form-control',
            'placeholder' => 'Denumire pagina'
          )
        ))
        ->add('link', TextType::class, array(
          'required'=>false,
          'label' => false,
	        'data' => $p->getLink(),
          'attr'=>array(
            'class'=>'form-control',
            'placeholder' => 'url pagina'
          )
        ))
        ->add('title', TextType::class, array(
          'required'=>false,
          'label' => false,
          'data' => $p->getTitle(),
          'attr'=>array(
            'class'=>'form-control',
            'placeholder' => 'Doua, trei cuvinte cheie (fara virgula) ce se gasesc in denumirea paginii'
          )
        ))
        ->add('keywords', TextType::class, array(
          'required'=>false,
          'label' => false,
          'data' => $p->getKeywords(),
          'attr'=>array(
            'class'=>'form-control',
            'placeholder' => 'Doua, trei cuvinte cheie (cu virgula) ce se gasesc in denumirea paginii'
          )
        ))
        ->add('description', TextType::class, array(
          'required'=>false,
          'label' => false,
          'data' => $p->getDescription(),
          'attr'=>array(
            'class'=>'form-control',
            'placeholder' => 'Descriere de circa 10 cuvinte'
          )
        ))
        ->add('text', TextareaType::class, array(
          'required'=>false,
          'label' => false,
          'data' => $txt,
          'attr'=>array(
            'class'=>'form-control',
            'id' => 'editor1'
          )
        ))

        ->add('save', SubmitType::class, array(
          'label'=>'Modifica',
          'attr'=>array(
          'class'=>'btn btn-success-gradien btn-lg'
          )
        ))
        ->getForm();

	    $form->handleRequest($request);

	    if ($form->isSubmitted() ) {
		  /*  ADD
		  $em = $this->getDoctrine()->getManager();
		    $em->persist($pagg);
		    $em->flush();*/

		    $data = $request->request->get('form');

		    $pr = $em->getRepository("App\Entity\Pagini");
		    $p = $pr->find($id);
		    if($p instanceOf Pagini)
		    {
		    	$p->setName($data['name']);
		    	$p->setLink($data['link']);
		    	$p->setTitle($data['title']);
		    	$p->setKeywords($data['keywords']);
		    	$p->setDescription($data['description']);
		    	$p->setText($data['text']);
		    	$em->persist($p);
		    	$em->flush();
		    	new JsonResponse(array(
		    		"name"=>$p->getName(),
		    		"link"=>$p->getLink(),
		    		"title"=>$p->getTitle(),
				    "keywords" => $p->getKeywords(),
				    "description" => $p->getDescription(),
				    "text" => $p->getText(),
			    ));
			    $this->addFlash('succes', 'k');
		    }


		    return $this->redirectToRoute('pagina',[
		    	'id'=>$id
			    ]);
	    }

      $pagina = $pagini->getPagini('da','da','magazin',$id, $session->get('id_lang'));

        return $this->render('admin/pagina.html.twig', [
          'pagina' => $pagina,
          'id' => $id,
          'form' => $form->createView()
        ]);
    }

}