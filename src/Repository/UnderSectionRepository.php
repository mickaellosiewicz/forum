<?php

namespace App\Repository;

use App\Entity\UnderSection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method UnderSection|null find($id, $lockMode = null, $lockVersion = null)
 * @method UnderSection|null findOneBy(array $criteria, array $orderBy = null)
 * @method UnderSection[]    findAll()
 * @method UnderSection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UnderSectionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, UnderSection::class);
    }

//    /**
//     * @return UnderSection[] Returns an array of UnderSection objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UnderSection
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
