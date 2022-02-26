<?php

namespace App\Entity;

use App\Repository\DesignadmRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DesignadmRepository::class)
 */
class Designadm
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
    private $user_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $post;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $style_admin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $style_site;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $avatar;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $favicon;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sigla;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $activ;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getPost(): ?string
    {
        return $this->post;
    }

    public function setPost(string $post): self
    {
        $this->post = $post;

        return $this;
    }

    public function getStyleAdmin(): ?string
    {
        return $this->style_admin;
    }

    public function setStyleAdmin(string $style_admin): self
    {
        $this->style_admin = $style_admin;

        return $this;
    }

    public function getStyleSite(): ?string
    {
        return $this->style_site;
    }

    public function setStyleSite(string $style_site): self
    {
        $this->style_site = $style_site;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(string $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getFavicon(): ?string
    {
        return $this->favicon;
    }

    public function setFavicon(string $favicon): self
    {
        $this->favicon = $favicon;

        return $this;
    }

    public function getSigla(): ?string
    {
        return $this->sigla;
    }

    public function setSigla(string $sigla): self
    {
        $this->sigla = $sigla;

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

    public function __toString()
    {
    return $this->style_admin;
   }

}