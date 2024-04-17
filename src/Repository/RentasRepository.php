<?php

namespace App\Repository;

use App\Entity\Rentas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Rentas>
 *
 * @method Rentas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rentas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rentas[]    findAll()
 * @method Rentas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RentasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rentas::class);
    }


    public function getRentas(){
        return $this->getEntityManager()
            ->createQuery('
                SELECT renta.renta_bruta
                FROM App\Entity\Rentas renta
            ')
            ->getResult();
    }

}
