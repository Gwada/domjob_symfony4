<?php

namespace App\Repository;

use App\Entity\ItemArborescence;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ItemArborescence|null find($id, $lockMode = null, $lockVersion = null)
 * @method ItemArborescence|null findOneBy(array $criteria, array $orderBy = null)
 * @method ItemArborescence[]    findAll()
 * @method ItemArborescence[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ItemArborescenceRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ItemArborescence::class);
    }

//    /**
//     * @return ItemArborescence[] Returns an array of ItemArborescence objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ItemArborescence
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
