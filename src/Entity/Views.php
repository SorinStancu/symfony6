<?php

namespace App\Entity;

use App\Repository\ViewsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ViewsRepository::class)
 */
class Views
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", length=10)
     */
    private $id_produs;

    /**
     * @ORM\Column(type="integer", length=5)
     */
    private $vizionare;

    /**
     * @ORM\Column(type="integer", length=2)
     */
    private $comenzi;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdProdus(): ?string
    {
        return $this->id_produs;
    }

    public function setIdProdus(string $id_produs): self
    {
        $this->id_produs = $id_produs;

        return $this;
    }

    public function getVizionare(): ?string
    {
        return $this->vizionare;
    }

    public function setVizionare(string $vizionare): self
    {
        $this->vizionare = $vizionare;

        return $this;
    }

    public function getComenzi(): ?string
    {
        return $this->comenzi;
    }

    public function setComenzi(string $comenzi): self
    {
        $this->comenzi = $comenzi;

        return $this;
    }
}