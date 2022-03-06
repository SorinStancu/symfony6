<?php

namespace App\Repository;

use App\Entity\Manufacturers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Manufacturers|null find($id, $lockMode = null, $lockVersion = null)
 * @method Manufacturers|null findOneBy(array $criteria, array $orderBy = null)
 * @method Manufacturers[]    findAll()
 * @method Manufacturers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ManufacturersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Manufacturers::class);
    }

  /**
   * @param Request $request
   * @return int|mixed|string
   */
  public function afProducatori()
    {
      return $this->findAll();
    }
}