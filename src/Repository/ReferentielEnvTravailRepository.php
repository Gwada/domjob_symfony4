<?php

namespace App\Repository;

use App\Entity\ReferentielEnvTravail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ReferentielEnvTravail|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReferentielEnvTravail|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReferentielEnvTravail[]    findAll()
 * @method ReferentielEnvTravail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReferentielEnvTravailRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ReferentielEnvTravail::class);
    }

//    /**
//     * @return ReferentielEnvTravail[] Returns an array of ReferentielEnvTravail objects
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
    public function findOneBySomeField($value): ?ReferentielEnvTravail
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
