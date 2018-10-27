<?php

namespace App\Repository;

use App\Entity\EnTeteRegroupement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method EnTeteRegroupement|null find($id, $lockMode = null, $lockVersion = null)
 * @method EnTeteRegroupement|null findOneBy(array $criteria, array $orderBy = null)
 * @method EnTeteRegroupement[]    findAll()
 * @method EnTeteRegroupement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnTeteRegroupementRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, EnTeteRegroupement::class);
    }

//    /**
//     * @return EnTeteRegroupement[] Returns an array of EnTeteRegroupement objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EnTeteRegroupement
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
