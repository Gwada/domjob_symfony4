<?php

namespace App\Repository;

use App\Entity\ReferentielCodeRome;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ReferentielCodeRome|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReferentielCodeRome|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReferentielCodeRome[]    findAll()
 * @method ReferentielCodeRome[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReferentielCodeRomeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ReferentielCodeRome::class);
    }

//    /**
//     * @return ReferentielCodeRome[] Returns an array of ReferentielCodeRome objects
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
    public function findOneBySomeField($value): ?ReferentielCodeRome
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
