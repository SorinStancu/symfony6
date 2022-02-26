<?php

namespace App\Repository;

use App\Entity\Orders;
use App\Entity\Users;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\User;

/**
 * @method Orders|null find($id, $lockMode = null, $lockVersion = null)
 * @method Orders|null findOneBy(array $criteria, array $orderBy = null)
 * @method Orders[]    findAll()
 * @method Orders[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Orders::class);
    }
  /**
   * @param Request $request
   * @return int|mixed|string
   */
    public function ComenziLT()
    {
      $data1x = date('Y-m', strtotime('-1 month'));
      $data1 =  $data1x . '-01';
      $data2 =  $data1x . '-' . date('t');

        return $this->createQueryBuilder('o')
          ->select('count(o.id)')
          ->where('o.data BETWEEN :data AND :ldata')
          ->setParameter('data',$data1)
          ->setParameter('ldata',$data2)
          ->getQuery()
          ->getSingleScalarResult();
    }
  /**
   * @param Request $request
   * @return int|mixed|string
   */
  public function ComenziLC()
  {
    $data1 =  date('Y-m') . '-01';
    $data2 =  date('Y-m-d');

    return $this->createQueryBuilder('o')
      ->select('count(o.id)')
      ->where('o.data BETWEEN :data AND :ldata')
      ->setParameter('data',$data1)
      ->setParameter('ldata',$data2)
      ->getQuery()
      ->getSingleScalarResult();
  }
  /**
   * @param Request $request
   * @return int|mixed|string
   */
  public function ComenziNoi()
  {
    $data2 = date("Y-m-d", strtotime('-7 days'));
    $data1 = date("Y-m-d");

    return $this->createQueryBuilder('o')
      ->select('count(o.id)')
      ->where('o.data <= :data')
      ->setParameter('data',$data1)
      ->andWhere('o.data >= :ldata')
      ->setParameter('ldata',$data2)
      ->andWhere('o.id_stare = :stare')
      ->setParameter('stare','0')
      ->getQuery()
      ->getSingleScalarResult();
  }
  
  /**
   * @param Request $request
   * @return int|mixed|string
   */
  public function afComenziNoi()
  {
    $data2 = date("Y-m-d", strtotime('-7 days'));
    $data1 = date("Y-m-d");

    return $this->createQueryBuilder('o')
      ->where('o.data <= :data')
      ->setParameter('data',$data1)
      ->andWhere('o.data >= :ldata')
      ->setParameter('ldata',$data2)
      ->andWhere('o.id_stare = :stare')
      ->setParameter('stare','0')
      ->orderBy('o.id', 'desc')
      ->getQuery()
      ->getResult();
  }
	
		
	public function afComenzi()
		{
			
			return $this->createQueryBuilder('o')
				->addSelect('a')
				->innerJoin('o.user', 'a')
				->orderBy('o.id', 'desc')
				->getQuery()
				->getResult();
		}

}