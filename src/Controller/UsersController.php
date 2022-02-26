<?php

namespace App\Controller;

use App\Entity\Users;
use App\Repository\UsersRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class UsersController extends AbstractController
{

  /**
   * @Route("/admin/users", name="users")
   * @param Request $request
   * @param UsersRepository $usersRepository
   * @param PaginatorInterface $paginator
   * @return Response
   */
    public function index(Request $request,UsersRepository $usersRepository, PaginatorInterface $paginator):Response
    {
      $useri=$usersRepository->findAll();

      $useri = $paginator->paginate(
        $useri,
        $request->query->getInt('page',1),30
      );
        return $this->render('admin/users.html.twig', [
            'title' => 'Useri',
            'useri' => $useri,
        ]);
    }



}