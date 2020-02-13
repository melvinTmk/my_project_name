<?php

namespace App\Repository;

use App\Entity\PageMelvin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PageMelvin|null find($id, $lockMode = null, $lockVersion = null)
 * @method PageMelvin|null findOneBy(array $criteria, array $orderBy = null)
 * @method PageMelvin[]    findAll()
 * @method PageMelvin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PageMelvinRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PageMelvin::class);
    }

    // /**
    //  * @return PageMelvin[] Returns an array of PageMelvin objects
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
    public function findOneBySomeField($value): ?PageMelvin
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
