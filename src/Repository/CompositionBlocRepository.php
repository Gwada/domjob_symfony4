<?php

namespace App\Repository;

use App\Entity\DomJob4CompositionBloc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DomJob4CompositionBloc|null find($id, $lockMode = null, $lockVersion = null)
 * @method DomJob4CompositionBloc|null findOneBy(array $criteria, array $orderBy = null)
 * @method DomJob4CompositionBloc[]    findAll()
 * @method DomJob4CompositionBloc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompositionBlocRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DomJob4CompositionBloc::class);
    }

//    /**
//     * @return DomJob4CompositionBloc[] Returns an array of DomJob4CompositionBloc objects
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
    public function findOneBySomeField($value): ?DomJob4CompositionBloc
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
