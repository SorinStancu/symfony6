<?php

namespace App\Repository;

use App\Entity\Banner;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Banner|null find($id, $lockMode = null, $lockVersion = null)
 * @method Banner|null findOneBy(array $criteria, array $orderBy = null)
 * @method Banner[]    findAll()
 * @method Banner[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BannerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Banner::class);
    }
	
	/**
	 * @param Request $request
	 * @return int|mixed|string
	 */
	public function afBanner()
		{
			
			return $this->createQueryBuilder('b')
					->where('b.id_lang = :id_lang')
					->setParameter('id_lang','1')
					->orderBy('b.poz', 'ASC')
					->getQuery()
					->getResult();
			}

}