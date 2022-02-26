<?php

namespace App\Entity;

use App\Repository\LanguageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LanguageRepository::class)
 */
class Language
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
    private $limba;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $presc;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $steag;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $poz;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $activ;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLimba(): ?string
    {
        return $this->limba;
    }

    public function setLimba(string $limba): self
    {
        $this->limba = $limba;

        return $this;
    }

    public function getPresc(): ?string
    {
        return $this->presc;
    }

    public function setPresc(string $presc): self
    {
        $this->presc = $presc;

        return $this;
    }

    public function getSteag(): ?string
    {
        return $this->steag;
    }

    public function setSteag(string $steag): self
    {
        $this->steag = $steag;

        return $this;
    }

    public function getPoz(): ?string
    {
        return $this->poz;
    }

    public function setPoz(string $poz): self
    {
        $this->poz = $poz;

        return $this;
    }

    public function getActiv(): ?string
    {
        return $this->activ;
    }

    public function setActiv(string $activ): self
    {
        $this->activ = $activ;

        return $this;
    }
}
