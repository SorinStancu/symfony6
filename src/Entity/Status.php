<?php

namespace App\Entity;

use App\Repository\StatusRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StatusRepository::class)
 */
class Status
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $tip;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $presc;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $activ;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $trimite_em;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTip(): ?string
    {
        return $this->tip;
    }

    public function setTip(string $tip): self
    {
        $this->tip = $tip;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

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

    public function getActiv(): ?string
    {
        return $this->activ;
    }

    public function setActiv(string $activ): self
    {
        $this->activ = $activ;

        return $this;
    }

    public function getTrimite_em(): ?string
    {
        return $this->trimite_em;
    }

    public function setTrimite_em(?string $trimite_em): self
    {
        $this->trimite_em = $trimite_em;

        return $this;
    }
}