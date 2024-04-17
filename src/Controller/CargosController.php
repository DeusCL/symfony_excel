<?php

namespace App\Controller;

use App\Entity\Cargos;
use App\Entity\Rentas;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CargosController extends AbstractController
{
    private $em;

    /**
     * @param $em
    */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/cargos', name: 'cargos_index')]
    public function index(): Response
    {   
        $cargos = $this->em->getRepository(Cargos::class)->getCargos();
        $rentas = $this->em->getRepository(Rentas::class)->getRentas();

        return $this->render('cargos/index.html.twig', [
            'cargos' => $cargos,
            'rentas' => $rentas
        ]);
    }
}
