<?php

namespace App\Entity;

use App\Repository\TraficRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TraficRepository::class)
 */
class Trafic
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
    private $domeniu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $search;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pag;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $ip;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $mob;

    /**
     * @ORM\Column(type="datetime")
     */
    private $data;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDomeniu(): ?string
    {
        return $this->domeniu;
    }

    public function setDomeniu(string $domeniu): self
    {
        $this->domeniu = $domeniu;

        return $this;
    }

    public function getSearch(): ?string
    {
        return $this->search;
    }

    public function setSearch(string $search): self
    {
        $this->search = $search;

        return $this;
    }

    public function getPag(): ?string
    {
        return $this->pag;
    }

    public function setPag(string $pag): self
    {
        $this->pag = $pag;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    public function getMob(): ?string
    {
        return $this->mob;
    }

    public function setMob(string $mob): self
    {
        $this->mob = $mob;

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
}