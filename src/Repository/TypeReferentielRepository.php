<?php

namespace App\Repository;

use App\Entity\TypeReferentiel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TypeReferentiel|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeReferentiel|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeReferentiel[]    findAll()
 * @method TypeReferentiel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeReferentielRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TypeReferentiel::class);
    }

//    /**
//     * @return TypeReferentiel[] Returns an array of TypeReferentiel objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypeReferentiel
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
