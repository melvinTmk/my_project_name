<?php

namespace App\Repository;

use App\Entity\PageLudi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PageLudi|null find($id, $lockMode = null, $lockVersion = null)
 * @method PageLudi|null findOneBy(array $criteria, array $orderBy = null)
 * @method PageLudi[]    findAll()
 * @method PageLudi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PageLudiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PageLudi::class);
    }

    // /**
    //  * @return PageLudi[] Returns an array of PageLudi objects
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
    public function findOneBySomeField($value): ?PageLudi
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
