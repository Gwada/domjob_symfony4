<?php

namespace App\Repository;

use App\Entity\CoherenceItem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CoherenceItem|null find($id, $lockMode = null, $lockVersion = null)
 * @method CoherenceItem|null findOneBy(array $criteria, array $orderBy = null)
 * @method CoherenceItem[]    findAll()
 * @method CoherenceItem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoherenceItemRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CoherenceItem::class);
    }

//    /**
//     * @return CoherenceItem[] Returns an array of CoherenceItem objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CoherenceItem
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
