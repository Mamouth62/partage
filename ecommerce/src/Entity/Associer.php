<?php

namespace App\Entity;

use App\Repository\AssocierRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AssocierRepository::class)]
class Associer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'associers')]
    private ?Products $produit = null;

    #[ORM\ManyToOne(inversedBy: 'associers')]
    private ?Taille $taille = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduit(): ?Products
    {
        return $this->produit;
    }

    public function setProduit(?Products $produit): static
    {
        $this->produit = $produit;

        return $this;
    }

    public function getTaille(): ?Taille
    {
        return $this->taille;
    }

    public function setTaille(?Taille $taille): static
    {
        $this->taille = $taille;

        return $this;
    }
}
