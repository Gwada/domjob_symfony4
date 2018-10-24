<?php

namespace App\Repository;

use App\Entity\DomaineProfessionnel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DomaineProfessionnel|null find($id, $lockMode = null, $lockVersion = null)
 * @method DomaineProfessionnel|null findOneBy(array $criteria, array $orderBy = null)
 * @method DomaineProfessionnel[]    findAll()
 * @method DomaineProfessionnel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DomaineProfessionnelRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DomaineProfessionnel::class);
    }

//    /**
//     * @return DomaineProfessionnel[] Returns an array of DomaineProfessionnel objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DomaineProfessionnel
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
