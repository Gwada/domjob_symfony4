<?php

namespace App\Repository;

use App\Entity\Advert;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

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
    public function getLastAdvertsWithRelations(): array
    {
        $qb = $this->createQueryBuilder('a')
            ->orderBy('a.id', 'DESC')
            ->setMaxResults(15);

        $this->getAdvertRelations($qb);
        return $qb->getQuery()
            ->getArrayResult()
        ;
    }

    /**
     * @return Advert[] Returns an array of Advert objects
     */
    public function getAdvertsWithFilters(Request $request)
    {
        $qb = $this->createQueryBuilder('a');

        $this->getAdvertRelations($qb);
        $this->whereCity($qb, $request->query->get('city_id'));
        $this->whereReferentielAppellation($qb, $request->query->get('referentielAppellation_id'));
        $qb->setMaxResults(15)
            ->setFirstResult(($request->query->get('page') ? (($request->query->get('page') - 1) * 15) : 0))
            ->orderBy('a.id', 'ASC')
        ;
        return new Paginator($qb, $fetchJoinCollection = true);
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
            ->addSelect('u')
        ;
    }

    public function whereCity(QueryBuilder $qb, $city_id)
    {
        if ($city_id)
        {
            $qb->andWhere($qb->expr()->in('c.id', $city_id));
        }
    }

    public function whereReferentielAppellation(QueryBuilder $qb, $referentielAppellation_id)
    {
        if ($referentielAppellation_id)
        {
            $qb->andWhere($qb->expr()->in('r.id', $referentielAppellation_id));
        }
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
