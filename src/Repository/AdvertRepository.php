<?php

namespace App\Repository;

use App\Entity\Advert;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Doctrine\ORM\QueryBuilder;

/**
 * @method Advert|null find($id, $lockMode = null, $lockVersion = null)
 * @method Advert|null findOneBy(array $criteria, array $orderBy = null)
 * @method Advert[]    findAll()
 * @method Advert[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdvertRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Advert::class);
    }

    /**
     * @return Advert[] Returns an array of Advert objects
     */
    public function getLastAdvertsWithRelations()
    {
        $qb = $this->createQueryBuilder('a')
            ->orderBy('a.id', 'DESC')
            ->setMaxResults(15);

        $this->getAdvertRelations($qb);
        return $qb->getQuery()->getArrayResult();
    }

    public function getAdvertWithRelations($id)
    {
        $qb = $this->createQueryBuilder('a')
            ->where('a.id = :val')
            ->setParameter('val', $id);

        $this->getAdvertRelations($qb);            
        return $qb->getQuery()->getOneOrNullResult();
    }

    public function getAdvertRelations(QueryBuilder $qb)
    {
        $qb->leftJoin('a.city', 'c')
        ->addSelect('c')
        ->leftJoin('a.referentielAppellation', 'r')
        ->addSelect('r')
        ->leftJoin('a.user', 'u')
        ->addSelect('u');
    }

    /*
    public function findOneBySomeField($value): ?Advert
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
