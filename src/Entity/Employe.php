<?php

namespace App\Entity;

use App\Repository\EmployeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmployeRepository::class)
 */
class Employe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $NomEmploye;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Fonction;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $Adresse;

    /**
     * @ORM\ManyToOne(targetEntity=Service::class, inversedBy="employes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Service;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEmploye(): ?string
    {
        return $this->NomEmploye;
    }

    public function setNomEmploye(string $NomEmploye): self
    {
        $this->NomEmploye = $NomEmploye;

        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->Fonction;
    }

    public function setFonction(string $Fonction): self
    {
        $this->Fonction = $Fonction;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(?string $Adresse): self
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getService(): ?Service
    {
        return $this->Service;
    }

    public function setService(?Service $Service): self
    {
        $this->Service = $Service;

        return $this;
    }
    public function __toString() {
        return $this->NomEmploye;
    }
}
