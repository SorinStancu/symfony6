<?php
	namespace App\Repository;
	
	use App\Entity\Review;
	use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
	use Doctrine\Persistence\ManagerRegistry;
	
	/**
	 * @method Review|null find($id, $lockMode = null, $lockVersion = null)
	 * @method Review|null findOneBy(array $criteria, array $orderBy = null)
	 * @method Review[]    findAll()
	 * @method Review[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
	 */
	class ReviewRepository extends ServiceEntityRepository{
		public function __construct(ManagerRegistry $registry)
			{
				parent::__construct($registry, Review::class);
			}
		
		/**
		 * @param Request $request
		 * @return int|mixed|string
		 */
		public function RewNoi()
			{
				$data2 = date('d-m-Y', strtotime('-7 days'));
				$data1 = date('d-m-Y');
				return $this->createQueryBuilder('r')
					->select('count(r.id)')
					->where('r.data <= :data')
					->setParameter('data', $data1)
					->andWhere('r.data >= :ldata')
					->setParameter('ldata', $data2)
					->andWhere('r.activ = :activ')
					->setParameter('activ', 'nu')
					->getQuery()
					->getSingleScalarResult();
			}
		
	}