<?php

namespace App\Repository;

use App\Entity\Language;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Language|null find($id, $lockMode = null, $lockVersion = null)
 * @method Language|null findOneBy(array $criteria, array $orderBy = null)
 * @method Language[]    findAll()
 * @method Language[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LanguageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Language::class);
    }

  /**
   * @param Request $request
   * @return int|mixed|string
   */
  public function lang($id_lang=NULL)
  {
      return $this->find($id_lang);

  }
  /**
   * @param Request $request
   * @return int|mixed|string
   */
  public function afisareLang()
  {
    return $this->createQueryBuilder('l')
      ->where('l.activ = :activ')
      ->setParameter('activ','da')
      ->orderBy('l.poz', 'ASC')
      ->getQuery()
      ->getResult();
  }
}