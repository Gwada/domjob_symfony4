<?php

namespace App\Repository;

use App\Entity\City;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method City|null find($id, $lockMode = null, $lockVersion = null)
 * @method City|null findOneBy(array $criteria, array $orderBy = null)
 * @method City[]    findAll()
 * @method City[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CityRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, City::class);
    }

    /**
     * @return City[] Returns an array of City objects
     */
    public function findByTerm($term, $maxResults)
    {
        $results = $this->createQueryBuilder('c')
            ->where('c.nomCommune LIKE :term')
            ->setParameter('term', "$term%")
            ->orderBy('c.nomCommune', 'ASC')
            ->setMaxResults($maxResults)
            ->getQuery()
            ->getArrayResult()
        ;
        foreach ($results as $key => $result)
        {
            $results[$key]['value'] = $results[$key]["codePostal"] . " - " . $results[$key]["nomCommune"];
        }
        return $results;
    }

    /**
     * @return City[] Returns an array of City objects
     */
    public function findByPostalCode($postalCode, $maxResults)
    {
        $results = $this->createQueryBuilder('c')
            ->where('c.codePostal LIKE :term')
            ->setParameter('term', "$postalCode%")
            ->orderBy('c.nomCommune', 'ASC')
            ->setMaxResults($maxResults)
            ->getQuery()
            ->getArrayResult()
        ;
        foreach ($results as $key => $result)
        {
            $results[$key]['value'] = $results[$key]["codePostal"] . " - " . $results[$key]["nomCommune"];
        }
        return $results;
    }

    /*
    public function findOneBySomeField($value): ?City
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
