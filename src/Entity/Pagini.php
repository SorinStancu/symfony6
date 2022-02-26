<?php

namespace App\Entity;

use App\Repository\PaginiRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PaginiRepository::class)
 */
class Pagini
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $idp;

    /**
     * @ORM\Column(type="integer", length=4,nullable=true)
     */
    private $lang_id;

    /**
     * @ORM\Column(type="string", length=3,nullable=true)
     */
    private $tip;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $codp;

    /**
     * @ORM\Column(type="integer", length=11,nullable=true)
     */
    private $producator;

    /**
     * @ORM\Column(type="string", length=7,nullable=true)
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=10,nullable=true)
     */
    private $loc;

    /**
     * @ORM\Column(type="integer", length=11,nullable=true)
     */
    private $poz;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $img;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $pdf;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $keywords;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $link;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $text;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdp(): ?string
    {
        return $this->idp;
    }

    public function setIdp(string $idp): self
    {
        $this->idp = $idp;

        return $this;
    }

    public function getLangId(): ?string
    {
        return $this->lang_id;
    }

    public function setLangId(string $lang_id): self
    {
        $this->lang_id = $lang_id;

        return $this;
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

    public function getCodp(): ?string
    {
        return $this->codp;
    }

    public function setCodp(string $codp): self
    {
        $this->codp = $codp;

        return $this;
    }

    public function getProducator(): ?string
    {
        return $this->producator;
    }

    public function setProducator(string $producator): self
    {
        $this->producator = $producator;

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

    public function getLoc(): ?string
    {
        return $this->loc;
    }

    public function setLoc(string $loc): self
    {
        $this->loc = $loc;

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

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getPdf(): ?string
    {
        return $this->pdf;
    }

    public function setPdf(string $pdf): self
    {
        $this->pdf = $pdf;

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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(string $keywords): self
    {
        $this->keywords = $keywords;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }
}