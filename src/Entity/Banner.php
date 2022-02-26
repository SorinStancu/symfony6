<?php

namespace App\Entity;

use App\Repository\BannerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BannerRepository::class)
 */
class Banner
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
    private $id_lang;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $link;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $activ;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $poz;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdLang(): ?string
    {
        return $this->id_lang;
    }

    public function setIdLang(string $id_lang): self
    {
        $this->id_lang = $id_lang;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

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

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

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

    public function getPoz(): ?string
    {
        return $this->poz;
    }

    public function setPoz(string $poz): self
    {
        $this->poz = $poz;

        return $this;
    }
	
		public function __toString(){
		
		return $this->name;
		
	}
 
}