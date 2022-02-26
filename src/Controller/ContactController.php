<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
	/**
	 * @Route("/admin/contact", name="contact")
	 * @param EntityManagerInterface $em
	 * @param ContactRepository      $contact
	 * @param Request                $request
	 * @return Response
	 */
	public function index(EntityManagerInterface $em, ContactRepository $contact, Request $request): Response
		{
			
			$session = $request->getSession();
			
			$pagg = new Contact();
			
			$p = $contact->find('1');
		
			$form = $this->createFormBuilder($pagg)
				->setAction($this->generateUrl('contact'))
				->add('img', HiddenType::class, array('data' => '-'))
				
				->add('name', TextType::class, array(
					'required' => false,
					'label' => false,
					'data' => $p->getName(),
					'attr' => array(
						'class' => 'form-control',
						'placeholder' => 'Denumire pagina'
					)))
				->add('link', TextType::class, array(
					'required' => false,
					'label' => false,
					'data' => $p->getLink(),
					'attr' => array(
						'class' => 'form-control',
						'placeholder' => 'url pagina'
					)))
				->add('title', TextType::class, array(
					'required' => true,
					'label' => false,
					'data' => $p->getTitle(),
					'attr' => array(
						'class' => 'form-control',
						'placeholder' => 'Doua, trei cuvinte cheie (fara virgula) ce se gasesc in denumirea paginii'
					)))
				->add('keywords', TextType::class, array(
					'required' => true,
					'label' => false,
					'data' => $p->getKeywords(),
					'attr' => array(
						'class' => 'form-control',
						'placeholder' => 'Doua, trei cuvinte cheie (cu virgula) ce se gasesc in denumirea paginii'
					)))
				->add('description', TextType::class, array(
					'required' => true,
					'label' => false,
					'data' => $p->getDescription(),
					'attr' => array(
						'class' => 'form-control',
						'placeholder' => 'Descriere de circa 10 cuvinte'
					)))
				->add('firma', TextType::class, array(
					'required' => true,
					'label' => false,
					'data' => $p->getFirma(),
					'attr' => array(
						'class' => 'form-control',
						'placeholder' => 'Descriere de circa 10 cuvinte'
					)))
				->add('info', TextareaType::class, array(
					'required' => false,
					'label' => false,
					'data' => $p->getInfo(),
					'attr' => array(
						'class' => 'form-control',
						'placeholder' => 'Cateva cuvinte despre firma'
					)))
				->add('adresa', TextareaType::class, array(
					'required' => false,
					'label' => false,
					'data' => $p->getAdresa(),
					'attr' => array(
						'class' => 'form-control',
						'placeholder' => 'Adresa'
					)))
				->add('cif', TextType::class, array(
					'required' => false,
					'label' => false,
					'data' => $p->getCif(),
					'attr' => array(
						'class' => 'form-control',
						'placeholder' => 'Cof fiscal'
					)))
				->add('fiscale', TextType::class, array(
					'required' => false,
					'label' => false,
					'data' => $p->getFiscale(),
					'attr' => array(
						'class' => 'form-control',
						'placeholder' => 'Nr. reg. com.'
					)))
				->add('cont', TextType::class, array(
					'required' => false,
					'label' => false,
					'data' => $p->getCont(),
					'attr' => array(
						'class' => 'form-control',
						'placeholder' => 'Iban'
					)))
				->add('banca', TextType::class, array(
					'required' => false,
					'label' => false,
					'data' => $p->getBanca(),
					'attr' => array(
						'class' => 'form-control',
						'placeholder' => 'Banca'
					)))
				->add('tel1', TextType::class, array(
					'required' => false,
					'label' => false,
					'data' => $p->getTel1(),
					'attr' => array(
						'class' => 'form-control',
						'placeholder' => 'Nr. reg. com.'
					)))
				->add('tel2', TextType::class, array(
					'required' => false,
					'label' => false,
					'data' => $p->getTel2(),
					'attr' => array(
						'class' => 'form-control',
						'placeholder' => 'Telefon'
					)))
				->add('tel3', TextType::class, array(
					'required' => false,
					'label' => false,
					'data' => $p->getTel3(),
					'attr' => array(
						'class' => 'form-control',
						'placeholder' => 'Telefon'
					)))
				->add('tel4', TextType::class, array(
					'required' => false,
					'label' => false,
					'data' => $p->getTel4(),
					'attr' => array(
						'class' => 'form-control',
						'placeholder' => 'Telefon'
					)))
				->add('fax1', TextType::class, array(
					'required' => false,
					'label' => false,
					'data' => $p->getFax1(),
					'attr' => array(
						'class' => 'form-control',
						'placeholder' => 'Telefon'
					)))
				->add('fax2', TextType::class, array(
					'required' => false,
					'label' => false,
					'data' => $p->getFax2(),
					'attr' => array(
						'class' => 'form-control',
						'placeholder' => 'Telefon'
					)))
				->add('mail1', TextType::class, array(
					'required' => false,
					'label' => false,
					'data' => $p->getMail1(),
					'attr' => array(
						'class' => 'form-control',
						'placeholder' => 'Email'
						
					)))
				->add('mail2', TextType::class, array(
					'required' => false,
					'label' => false,
					'data' => $p->getMail2(),
					'attr' => array(
						'class' => 'form-control',
						'placeholder' => 'Email'
					)))
				
				->add('save', SubmitType::class, array(
					'label' => 'Salveaza',
					'attr' => array(
						'class' => 'btn btn-success-gradien btn-lg'
					)))
				->getForm();
			
			$form->handleRequest($request);
			if($form->isSubmitted()){
				/*  ADD
				$em = $this->getDoctrine()->getManager();
					$em->persist($pagg);
					$em->flush();*/
				$data = $request->request->get('form');
				$pr = $em->getRepository('App\Entity\Contact');
				$p = $pr->find('1');
				
				if($p instanceOf Contact){
					$p->setName($data['name']);
					$p->setLink($data['link']);
					$p->setTitle($data['title']);
					$p->setKeywords($data['keywords']);
					$p->setDescription($data['description']);
					$p->setFirma($data['firma']);
					$p->setInfo($data['info']);
					$p->setAdresa($data['adresa']);
					$p->setCif($data['cif']);
					$p->setCont($data['cont']);
					$p->setFiscale($data['fiscale']);
					$p->setBanca($data['banca']);
					$p->setTel1($data['tel1']);
					$p->setTel2($data['tel2']);
					$p->setTel3($data['tel3']);
					$p->setTel4($data['tel4']);
					$p->setFax1($data['fax1']);
					$p->setFax2($data['fax2']);
					$p->setMail1($data['mail1']);
					$p->setMail2($data['mail2']);
					$em->persist($p);
					$em->flush();
					
					new JsonResponse(array(
						'name' => $p->getName(),
						'link' => $p->getLink(),
						'title' => $p->getTitle(),
						'keywords' => $p->getKeywords(),
						'description' => $p->getDescription(),
						'firma' => $p->getFirma(),
						'info' => $p->getInfo(),
						'adresa' => $p->getAdresa(),
						'cif' => $p->getCif(),
						'cont' => $p->getCont(),
						'fiscale' => $p->getFiscale(),
						'banca' => $p->getBanca(),
						'tel1' => $p->getTel1(),
						'tel2' => $p->getTel2(),
						'tel3' => $p->getTel3(),
						'tel4' => $p->getTel4(),
						'fax1' => $p->getFax1(),
						'fax2' => $p->getFax2(),
						'mail1' => $p->getMail1(),
						'mail2' => $p->getMail2(),
						));
					$this->addFlash('succes', 'k');
				}
				
				return $this->redirectToRoute('contact');
			}
			
			return $this->render('admin/contact.html.twig', [
				'pagina' => 'Contact',
				'form' => $form->createView()
			]);
		}
	
}