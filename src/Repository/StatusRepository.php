<?php

namespace App\Repository;

use App\Entity\Status;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Status|null find($id, $lockMode = null, $lockVersion = null)
 * @method Status|null findOneBy(array $criteria, array $orderBy = null)
 * @method Status[]    findAll()
 * @method Status[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Status::class);
    }
	
	/**
	 * @param Request $request
	 * @return int|mixed|string
	 */
	public function afStatus($tip)
		{

			return $this->createQueryBuilder('s')
				->where('s.tip = :tip')
				->setParameter('tip', $tip)
				->andWhere('s.activ = :activ')
				->setParameter('activ', 'da')
				->getQuery()
				->getResult();
		}

}