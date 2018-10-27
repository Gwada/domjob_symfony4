<?php

namespace App\Repository;

use App\Entity\DescriptifRubrique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DescriptifRubrique|null find($id, $lockMode = null, $lockVersion = null)
 * @method DescriptifRubrique|null findOneBy(array $criteria, array $orderBy = null)
 * @method DescriptifRubrique[]    findAll()
 * @method DescriptifRubrique[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DescriptifRubriqueRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DescriptifRubrique::class);
    }

//    /**
//     * @return DescriptifRubrique[] Returns an array of DescriptifRubrique objects
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
    public function findOneBySomeField($value): ?DescriptifRubrique
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
