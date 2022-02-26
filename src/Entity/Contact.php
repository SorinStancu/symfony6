<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContactRepository::class)
 */
class Contact
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $link;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firma;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $info;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresa;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fiscale;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cif;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cont;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $banca;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel4;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel5;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fax1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fax2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $keywords;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getFirma(): ?string
    {
        return $this->firma;
    }

    public function setFirma(string $firma): self
    {
        $this->firma = $firma;

        return $this;
    }

    public function getInfo(): ?string
    {
        return $this->info;
    }

    public function setInfo(string $info): self
    {
        $this->info = $info;

        return $this;
    }

    public function getAdresa(): ?string
    {
        return $this->adresa;
    }

    public function setAdresa(string $adresa): self
    {
        $this->adresa = $adresa;

        return $this;
    }

    public function getFiscale(): ?string
    {
        return $this->fiscale;
    }

    public function setFiscale(string $fiscale): self
    {
        $this->fiscale = $fiscale;

        return $this;
    }

    public function getCif(): ?string
    {
        return $this->cif;
    }

    public function setCif(string $cif): self
    {
        $this->cif = $cif;

        return $this;
    }

    public function getCont(): ?string
    {
        return $this->cont;
    }

    public function setCont(string $cont): self
    {
        $this->cont = $cont;

        return $this;
    }

    public function getBanca(): ?string
    {
        return $this->banca;
    }

    public function setBanca(string $banca): self
    {
        $this->banca = $banca;

        return $this;
    }

    public function getTel1(): ?string
    {
        return $this->tel1;
    }

    public function setTel1(string $tel1): self
    {
        $this->tel1 = $tel1;

        return $this;
    }

    public function getTel2(): ?string
    {
        return $this->tel2;
    }

    public function setTel2(string $tel2): self
    {
        $this->tel2 = $tel2;

        return $this;
    }

    public function getTel3(): ?string
    {
        return $this->tel3;
    }

    public function setTel3(string $tel3): self
    {
        $this->tel3 = $tel3;

        return $this;
    }

    public function getTel4(): ?string
    {
        return $this->tel4;
    }

    public function setTel4(string $tel4): self
    {
        $this->tel4 = $tel4;

        return $this;
    }

    public function getTel5(): ?string
    {
        return $this->tel5;
    }

    public function setTel5(string $tel5): self
    {
        $this->tel5 = $tel5;

        return $this;
    }

    public function getFax1(): ?string
    {
        return $this->fax1;
    }

    public function setFax1(string $fax1): self
    {
        $this->fax1 = $fax1;

        return $this;
    }

    public function getFax2(): ?string
    {
        return $this->fax2;
    }

    public function setFax2(string $fax2): self
    {
        $this->fax2 = $fax2;

        return $this;
    }

    public function getMail1(): ?string
    {
        return $this->mail1;
    }

    public function setMail1(string $mail1): self
    {
        $this->mail1 = $mail1;

        return $this;
    }

    public function getMail2(): ?string
    {
        return $this->mail2;
    }

    public function setMail2(string $mail2): self
    {
        $this->mail2 = $mail2;

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
}
