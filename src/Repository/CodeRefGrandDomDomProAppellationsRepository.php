<?php

namespace App\Repository;

use App\Entity\CodeRefGrandDomDomProAppellations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CodeRefGrandDomDomProAppellations|null find($id, $lockMode = null, $lockVersion = null)
 * @method CodeRefGrandDomDomProAppellations|null findOneBy(array $criteria, array $orderBy = null)
 * @method CodeRefGrandDomDomProAppellations[]    findAll()
 * @method CodeRefGrandDomDomProAppellations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CodeRefGrandDomDomProAppellationsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CodeRefGrandDomDomProAppellations::class);
    }

//    /**
//     * @return CodeRefGrandDomDomProAppellations[] Returns an array of CodeRefGrandDomDomProAppellations objects
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
    public function findOneBySomeField($value): ?CodeRefGrandDomDomProAppellations
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
