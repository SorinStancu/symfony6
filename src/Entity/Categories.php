<?php

namespace App\Entity;

use App\Repository\CategoriesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoriesRepository::class)
 */
class Categories
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_lang;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $idc;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $lvl;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $filtre;

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

    public function getIdLang(): ?int
    {
        return $this->id_lang;
    }

    public function setIdLang(int $id_lang): self
    {
        $this->id_lang = $id_lang;

        return $this;
    }

    public function getIdc(): ?string
    {
        return $this->idc;
    }

    public function setIdc(string $idc): self
    {
        $this->idc = $idc;

        return $this;
    }

    public function getLvl(): ?int
    {
        return $this->lvl;
    }

    public function setLvl(?int $lvl): self
    {
        $this->lvl = $lvl;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getFiltre(): ?string
    {
        return $this->filtre;
    }

    public function setFiltre(?string $filtre): self
    {
        $this->filtre = $filtre;

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
