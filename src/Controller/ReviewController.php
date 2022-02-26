<?php

namespace App\Controller;

use App\Repository\ReviewRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReviewController extends AbstractController
{
  /**
   * @Route("admin/review", name="review")
   * @param Request $request
   * @param ReviewRepository $reviews
   * @param PaginatorInterface $paginator
   * @return Response
   */
  public function index(Request $request,ReviewRepository $reviews, PaginatorInterface $paginator):Response
    {
      $review=$reviews->findAll();

      $review = $paginator->paginate(
        $review,
        $request->query->getInt('page',1),30
      );
      return $this->render('review/index.html.twig', [
        'title' => 'Useri',
        'review' => $review,
      ]);
    }
}