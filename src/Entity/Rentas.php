<?php

namespace App\Entity;

use App\Repository\RentasRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RentasRepository::class)]
class Rentas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $renta_bruta = null;

    #[ORM\ManyToOne(inversedBy: 'rentas')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Cargos $cargo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRentaBruta(): ?int
    {
        return $this->renta_bruta;
    }

    public function setRentaBruta(int $renta_bruta): static
    {
        $this->renta_bruta = $renta_bruta;

        return $this;
    }

    public function getCargo(): ?Cargos
    {
        return $this->cargo;
    }

    public function setCargo(?Cargos $cargo): static
    {
        $this->cargo = $cargo;

        return $this;
    }
}
