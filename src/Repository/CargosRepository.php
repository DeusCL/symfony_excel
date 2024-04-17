<?php

namespace App\Repository;

use App\Entity\Cargos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cargos>
 *
 * @method Cargos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cargos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cargos[]    findAll()
 * @method Cargos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CargosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cargos::class);
    }


    public function getCargos(){
        return $this->getEntityManager()
            ->createQuery('
                SELECT c.id, c.nombre
                FROM App\Entity\Cargos c
            ')
            ->getResult();
    }
}
