<?php

namespace App\Entity;

use App\Entity\Users;
use App\Repository\OrdersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrdersRepository", repositoryClass=OrdersRepository::class)
 */
class Orders
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
    private $id_com;


    /**
     * @ORM\Column(type="string", length=10)
     */
    private $plata;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $data;

    /**
     * @Assert\DateTime()
     * @ORM\Column(type="datetime")
     */
    private $ora;

    /**
     * @ORM\Column(type="integer", length=10)
     */
    private $suma;

    /**
     * @ORM\Column(type="integer", nullable=true, length=10)
     */
    private $id_stare;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class, inversedBy="orders")
     * @ORM\JoinColumn(nullable=true)
     */
    private $user;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCom(): ?string
    {
        return $this->id_com;
    }

    public function setIdCom(string $id_com): self
    {
        $this->id_com = $id_com;

        return $this;
    }


    public function getPlata(): ?string
    {
        return $this->plata;
    }

    public function setPlata(string $plata): self
    {
        $this->plata = $plata;

        return $this;
    }

    public function getData(): ?\DateTimeInterface
    {
        return $this->data;
    }

    public function setData(\DateTimeInterface $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getOra():?\DateTimeInterface
    {
        return $this->ora;
    }

    public function setOra(\DateTimeInterface $ora): self
    {
        $this->ora = $ora;

        return $this;
    }

    public function getSuma(): ?string
    {
        return $this->suma;
    }

    public function setSuma(string $suma): self
    {
        $this->suma = $suma;

        return $this;
    }

    public function getIdStare(): ?int
    {
        return $this->id_stare;
    }

    public function setIdStare(string $id_stare): self
    {
        $this->id_stare = $id_stare;

        return $this;
    }

    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(?Users $user): self
    {
        $this->user = $user;

        return $this;
    }


   
}