<?php

namespace App\Repository;

use App\Entity\PageAlex;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PageAlex|null find($id, $lockMode = null, $lockVersion = null)
 * @method PageAlex|null findOneBy(array $criteria, array $orderBy = null)
 * @method PageAlex[]    findAll()
 * @method PageAlex[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PageAlexRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PageAlex::class);
    }

    // /**
    //  * @return PageAlex[] Returns an array of PageAlex objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PageAlex
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
