<?php

namespace App\Repository;

use App\Entity\RubriqueMobilite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method RubriqueMobilite|null find($id, $lockMode = null, $lockVersion = null)
 * @method RubriqueMobilite|null findOneBy(array $criteria, array $orderBy = null)
 * @method RubriqueMobilite[]    findAll()
 * @method RubriqueMobilite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RubriqueMobiliteRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RubriqueMobilite::class);
    }

//    /**
//     * @return RubriqueMobilite[] Returns an array of RubriqueMobilite objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RubriqueMobilite
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
