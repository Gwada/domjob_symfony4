<?php

namespace App\Repository;

use App\Entity\ReferentielActiviteRiasec;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ReferentielActiviteRiasec|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReferentielActiviteRiasec|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReferentielActiviteRiasec[]    findAll()
 * @method ReferentielActiviteRiasec[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReferentielActiviteRiasecRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ReferentielActiviteRiasec::class);
    }

//    /**
//     * @return ReferentielActiviteRiasec[] Returns an array of ReferentielActiviteRiasec objects
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
    public function findOneBySomeField($value): ?ReferentielActiviteRiasec
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
