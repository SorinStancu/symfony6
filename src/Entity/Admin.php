<?php

namespace App\Entity;

use App\Repository\AdminRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdminRepository::class)
 */
class Admin
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", length=1)
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $erp;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $blog;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $site;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $nivel;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $card;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $transport;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $stoc;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $moneda;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $template;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $multilingv;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $meniu_st;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $meniu_sus;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $galerie;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $slider;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $news;

    /**
     * @ORM\Column(type="integer")
     */
    private $nrpag;


    /**
     * @ORM\Column(type="string", length=200)
     */
    private $fb;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $ym;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $tw;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $gplus;

    /**
     * @ORM\Column(type="string", length=300)
     */
    private $yt;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $inst;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $analytics;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getErp(): ?string
    {
        return $this->erp;
    }

    public function setErp(string $erp): self
    {
        $this->erp = $erp;

        return $this;
    }

    public function getBlog(): ?string
    {
        return $this->blog;
    }

    public function setBlog(string $blog): self
    {
        $this->blog = $blog;

        return $this;
    }

    public function getSite(): ?string
    {
        return $this->site;
    }

    public function setSite(string $site): self
    {
        $this->site = $site;

        return $this;
    }

    public function getNivel(): ?string
    {
        return $this->nivel;
    }

    public function setNivel(string $nivel): self
    {
        $this->nivel = $nivel;

        return $this;
    }

    public function getCard(): ?string
    {
        return $this->card;
    }

    public function setCard(string $card): self
    {
        $this->card = $card;

        return $this;
    }

    public function getTransport(): ?string
    {
        return $this->transport;
    }

    public function setTransport(string $transport): self
    {
        $this->transport = $transport;

        return $this;
    }

    public function getStoc(): ?string
    {
        return $this->stoc;
    }

    public function setStoc(string $stoc): self
    {
        $this->stoc = $stoc;

        return $this;
    }

    public function getMoneda(): ?string
    {
        return $this->moneda;
    }

    public function setMoneda(string $moneda): self
    {
        $this->moneda = $moneda;

        return $this;
    }

    public function getTemplate(): ?string
    {
        return $this->template;
    }

    public function setTemplate(string $template): self
    {
        $this->template = $template;

        return $this;
    }

    public function getMultilingv(): ?string
    {
        return $this->multilingv;
    }

    public function setMultilingv(string $multilingv): self
    {
        $this->multilingv = $multilingv;

        return $this;
    }

    public function getMeniuSt(): ?string
    {
        return $this->meniu_st;
    }

    public function setMeniuSt(string $meniu_st): self
    {
        $this->meniu_st = $meniu_st;

        return $this;
    }

    public function getMeniuSus(): ?string
    {
        return $this->meniu_sus;
    }

    public function setMeniuSus(string $meniu_sus): self
    {
        $this->meniu_sus = $meniu_sus;

        return $this;
    }

    public function getGalerie(): ?string
    {
        return $this->galerie;
    }

    public function setGalerie(string $galerie): self
    {
        $this->galerie = $galerie;

        return $this;
    }

    public function getSlider(): ?string
    {
        return $this->slider;
    }

    public function setSlider(string $slider): self
    {
        $this->slider = $slider;

        return $this;
    }

    public function getNews(): ?string
    {
        return $this->news;
    }

    public function setNews(string $news): self
    {
        $this->news = $news;

        return $this;
    }

    public function getNrpag(): ?int
    {
        return $this->nrpag;
    }

    public function setNrpag(int $nrpag): self
    {
        $this->nrpag = $nrpag;

        return $this;
    }

    public function getFb(): ?string
    {
        return $this->fb;
    }

    public function setFb(string $fb): self
    {
        $this->fb = $fb;

        return $this;
    }

    public function getYm(): ?string
    {
        return $this->ym;
    }

    public function setYm(string $ym): self
    {
        $this->ym = $ym;

        return $this;
    }

    public function getTw(): ?string
    {
        return $this->tw;
    }

    public function setTw(string $tw): self
    {
        $this->tw = $tw;

        return $this;
    }

    public function getGplus(): ?string
    {
        return $this->gplus;
    }

    public function setGplus(string $gplus): self
    {
        $this->gplus = $gplus;

        return $this;
    }

    public function getYt(): ?string
    {
        return $this->yt;
    }

    public function setYt(string $yt): self
    {
        $this->yt = $yt;

        return $this;
    }

    public function getInst(): ?string
    {
        return $this->inst;
    }

    public function setInst(string $inst): self
    {
        $this->inst = $inst;

        return $this;
    }

    public function getAnalytics(): ?string
    {
        return $this->analytics;
    }

    public function setAnalytics(string $analytics): self
    {
        $this->analytics = $analytics;

        return $this;
    }
    
	 public function __toString(){
		
		return $this->site;
		
	}

}