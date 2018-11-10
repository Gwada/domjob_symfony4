<?php

namespace App\Repository;

use App\Entity\ReferentielActivite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ReferentielActivite|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReferentielActivite|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReferentielActivite[]    findAll()
 * @method ReferentielActivite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReferentielActiviteRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ReferentielActivite::class);
    }

    /**
     * @return ReferentielActivite[] Returns an array of ReferentielActivite objects
    */
    /*public function findByTerm($term, $maxResults)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults($maxResults)
            ->getQuery()
            ->getResult()
        ;
    }*/
    

    /*
    public function findOneBySomeField($value): ?ReferentielActivite
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
