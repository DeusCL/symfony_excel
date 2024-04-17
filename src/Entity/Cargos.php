<?php

namespace App\Entity;

use App\Repository\CargosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CargosRepository::class)]
class Cargos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(length: 5)]
    private ?string $grado = null;

    #[ORM\Column(length: 1)]
    private ?string $genero = null;

    #[ORM\Column(length: 26)]
    private ?string $nacionalidad = null;

    /**
     * @var Collection<int, Rentas>
     */
    #[ORM\OneToMany(targetEntity: Rentas::class, mappedBy: 'cargo', orphanRemoval: true)]
    private Collection $rentas;

    public function __construct()
    {
        $this->rentas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getGrado(): ?string
    {
        return $this->grado;
    }

    public function setGrado(string $grado): static
    {
        $this->grado = $grado;

        return $this;
    }

    public function getGenero(): ?string
    {
        return $this->genero;
    }

    public function setGenero(string $genero): static
    {
        $this->genero = $genero;

        return $this;
    }

    public function getNacionalidad(): ?string
    {
        return $this->nacionalidad;
    }

    public function setNacionalidad(string $nacionalidad): static
    {
        $this->nacionalidad = $nacionalidad;

        return $this;
    }

    /**
     * @return Collection<int, Rentas>
     */
    public function getRentas(): Collection
    {
        return $this->rentas;
    }

    public function addRenta(Rentas $renta): static
    {
        if (!$this->rentas->contains($renta)) {
            $this->rentas->add($renta);
            $renta->setCargo($this);
        }

        return $this;
    }

    public function removeRenta(Rentas $renta): static
    {
        if ($this->rentas->removeElement($renta)) {
            // set the owning side to null (unless already changed)
            if ($renta->getCargo() === $this) {
                $renta->setCargo(null);
            }
        }

        return $this;
    }
}
