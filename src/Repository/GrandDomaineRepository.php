<?php

namespace App\Repository;

use App\Entity\GrandDomaine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method GrandDomaine|null find($id, $lockMode = null, $lockVersion = null)
 * @method GrandDomaine|null findOneBy(array $criteria, array $orderBy = null)
 * @method GrandDomaine[]    findAll()
 * @method GrandDomaine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrandDomaineRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, GrandDomaine::class);
    }

//    /**
//     * @return GrandDomaine[] Returns an array of GrandDomaine objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GrandDomaine
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
