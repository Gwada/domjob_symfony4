<?php

namespace App\Repository;

use App\Entity\ReferentielCompetence;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ReferentielCompetence|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReferentielCompetence|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReferentielCompetence[]    findAll()
 * @method ReferentielCompetence[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReferentielCompetenceRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ReferentielCompetence::class);
    }

//    /**
//     * @return ReferentielCompetence[] Returns an array of ReferentielCompetence objects
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
    public function findOneBySomeField($value): ?ReferentielCompetence
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
