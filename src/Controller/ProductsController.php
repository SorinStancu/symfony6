<?php

namespace App\Controller;


use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use App\Repository\ProductsRepository;
use DateInterval;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Snc\RedisBundle\Client\Phpredis\Client;
use Symfony\Contracts\Cache\ItemInterface;
use Symfony\Component\Cache\Simple\FilesystemCache;


class ProductsController extends AbstractController
{

  /**
   * @param ProductsRepository $produse
   * @param PaginatorInterface $paginator
   * @param Request            $request
   * @return Response
   * @throws \Psr\Cache\InvalidArgumentException
   */
  #[Route('/admin/products', name: 'products')]
    public function index(ProductsRepository $produse, PaginatorInterface $paginator, Request $request): Response
    {

      $cache = new FilesystemAdapter();

      $products = $cache->getItem('produse.grupate');
      if (!$products->isHit()) {

        $products->set($produse->produse());

        $cache->save($products);
      }

      $produsegrup = $paginator->paginate(
        $products->get(),
        $request->query->getInt('page',1),20
      );

//      $cache->deleteItem('produse.grupate');

//      $produsegrup = $paginator->paginate(
//        $produse->produse(),
//        $request->query->getInt('page',1),20
//      );

        return $this->render('admin/products.html.twig', [
            'produse' => $produsegrup,
        ]);
    }
}