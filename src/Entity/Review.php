<?php

namespace App\Entity;

use App\Repository\ReviewRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReviewRepository::class)
 */
class Review
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", length=5)
     */
    private $id_prod;

    /**
     * @ORM\Column(type="integer", length=5)
     */
    private $user_id;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $tip;

    /**
     * @ORM\Column(type="integer", length=1)
     */
    private $rating;

    /**
     * @ORM\Column(type="datetime")
     */
    private $data;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nume;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $review;

    /**
     * @ORM\Column(type="integer", length=1)
     */
    private $id_lang;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $activ;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $ip;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdProd(): ?string
    {
        return $this->id_prod;
    }

    public function setIdProd(string $id_prod): self
    {
        $this->id_prod = $id_prod;

        return $this;
    }

    public function getIdUser(): ?string
    {
        return $this->user_id;
    }

    public function setIdUser(string $user_id): self
    {
        $this->user_id = $user_id;

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

    public function getRating(): ?string
    {
        return $this->rating;
    }

    public function setRating(string $rating): self
    {
        $this->rating = $rating;

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

    public function getNume(): ?string
    {
        return $this->nume;
    }

    public function setNume(string $nume): self
    {
        $this->nume = $nume;

        return $this;
    }

    public function getReview(): ?string
    {
        return $this->review;
    }

    public function setReview(string $review): self
    {
        $this->review = $review;

        return $this;
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

    public function getActiv(): ?string
    {
        return $this->activ;
    }

    public function setActiv(string $activ): self
    {
        $this->activ = $activ;

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
}