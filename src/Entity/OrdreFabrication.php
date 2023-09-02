<?php

namespace App\Entity;

use App\Repository\OrdreFabricationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrdreFabricationRepository::class)
 */
class OrdreFabrication
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_OF;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Type_of;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $qualite;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="integer")
     */
    private $temps_estime;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdOF(): ?string
    {
        return $this->id_OF;
    }

    public function setIdOF(string $id_OF): self
    {
        $this->id_OF = $id_OF;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTypeOf(): ?string
    {
        return $this->Type_of;
    }

    public function setTypeOf(string $Type_of): self
    {
        $this->Type_of = $Type_of;

        return $this;
    }

    public function getQuantité(): ?int
    {
        return $this->quantité;
    }

    public function setQuantité(int $quantité): self
    {
        $this->quantité = $quantité;

        return $this;
    }

    public function getQualité(): ?string
    {
        return $this->qualité;
    }

    public function setQualité(string $qualité): self
    {
        $this->qualité = $qualité;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getTempsEstimé(): ?int
    {
        return $this->temps_estimé;
    }

    public function setTempsEstimé(int $temps_estimé): self
    {
        $this->temps_estimé = $temps_estimé;

        return $this;
    }
}
