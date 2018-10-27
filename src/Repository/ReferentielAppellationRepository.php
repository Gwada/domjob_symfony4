<?php

namespace App\Repository;

use App\Entity\ReferentielAppellation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ReferentielAppellation|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReferentielAppellation|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReferentielAppellation[]    findAll()
 * @method ReferentielAppellation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReferentielAppellationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ReferentielAppellation::class);
    }

//    /**
//     * @return ReferentielAppellation[] Returns an array of ReferentielAppellation objects
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
    public function findOneBySomeField($value): ?ReferentielAppellation
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
