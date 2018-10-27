<?php

namespace App\Repository;

use App\Entity\CoherenceReferentielGrandDomaineDomaineProfessionnel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CoherenceReferentielGrandDomaineDomaineProfessionnel|null find($id, $lockMode = null, $lockVersion = null)
 * @method CoherenceReferentielGrandDomaineDomaineProfessionnel|null findOneBy(array $criteria, array $orderBy = null)
 * @method CoherenceReferentielGrandDomaineDomaineProfessionnel[]    findAll()
 * @method CoherenceReferentielGrandDomaineDomaineProfessionnel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoherenceReferentielGrandDomaineDomaineProfessionnelRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CoherenceReferentielGrandDomaineDomaineProfessionnel::class);
    }

//    /**
//     * @return CoherenceReferentielGrandDomaineDomaineProfessionnel[] Returns an array of CoherenceReferentielGrandDomaineDomaineProfessionnel objects
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
    public function findOneBySomeField($value): ?CoherenceReferentielGrandDomaineDomaineProfessionnel
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
