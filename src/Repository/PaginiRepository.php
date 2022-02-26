<?php

namespace App\Repository;

use App\Entity\Pagini;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method Pagini|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pagini|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pagini[]    findAll()
 * @method Pagini[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaginiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pagini::class);
    }
	
	/**
	 * @param Request $request
	 * @param         $galerie
	 * @param         $news
	 * @param         $site
	 * @param null    $id
	 * @return int|mixed|string
	 */
  public function getPagini($galerie,$news,$site,$id=null)
  {
	  
     if($id)
     {
       return $this->find($id);
     }
     else
   {
       $q = $this->createQueryBuilder('p')
      ->where('p.status = :status')
      ->setParameter('status','activ')
      ->andWhere('p.lang_id = :id_lang')
      ->setParameter('id_lang' ,'1')
      ->andWhere('p.loc != :loc')
      ->setParameter('loc' ,'landing')
	    ->andWhere('p.id != :id')
	    ->setParameter('id' ,'3')
	    ->andWhere('p.id != :id')
	    ->setParameter('id' ,'4');
     if($site=='prezentare')
    {
      $q
        ->andWhere('p.id != :id')
        ->setParameter('id' ,'4')
        ->andWhere('p.id != :id')
        ->setParameter('id' ,'5')
        ->andWhere('p.id != :id')
        ->setParameter('id' ,'6')
        ->andWhere('p.id != :id')
        ->setParameter('id' ,'7')
        ->andWhere('p.id != :id')
        ->setParameter('id' ,'126')
        ->andWhere('p.id != :id')
        ->setParameter('id' ,'135');
    }

    return $q
      ->orderBy('p.poz', 'ASC')
      ->getQuery()
      ->getResult();
  }
 }
}