<?php

namespace App\Entity;

use App\Repository\ManufacturersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ManufacturersRepository::class)
 */
class Manufacturers
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nume;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $link;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $img;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $detalii;

    /**
     * @ORM\Column(type="integer")
     */
    private $poz;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $active;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNume(): ?string
    {
        return $this->nume;
    }

    public function setNume(string $nume): self
    {
        $this->nume = $nume;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(?string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getDetalii(): ?string
    {
        return $this->detalii;
    }

    public function setDetalii(?string $detalii): self
    {
        $this->detalii = $detalii;

        return $this;
    }

    public function getPoz(): ?int
    {
        return $this->poz;
    }

    public function setPoz(int $poz): self
    {
        $this->poz = $poz;

        return $this;
    }

    public function getActive(): ?string
    {
        return $this->active;
    }

    public function setActive(string $active): self
    {
        $this->active = $active;

        return $this;
    }
}
