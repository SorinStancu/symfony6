<?php

namespace App\Entity;


use App\Repository\UsersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Orders;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository", repositoryClass=UsersRepository::class)
 * @ORM\Table(name="users")
 */
class Users
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
  /**
   * @ORM\Column(type="string", nullable=false)
   */
    private $nume;

  /**
   * @ORM\Column(type="string")
   */
  private $user;
	/**
	 * @ORM\Column(type="integer")
	 */
	private $tel;
	/**
	 * @ORM\Column(type="string")
	 */
	private $mail;
	/**
	 * @ORM\Column(type="string")
	 */
	private $adaugat;
	/**
	 * @ORM\Column(type="datetime")
	 */
	private $data;

    /**
     * @ORM\OneToMany(targetEntity=Orders::class, mappedBy="user", orphanRemoval=true ,cascade={"persist"})
     */
    private $orders;

    public function __construct()
    {
        $this->orders = new ArrayCollection();
    }

  public function getId(): ?int
    {
        return $this->id;
    }
  public function getNume()
  {
    return $this->nume;
  }

  public function setNume($nume)
  {
    return $this->nume = $nume;
  }
  public function __toString(){

    return $this->nume;

  }
  public function getUser()
  {
    return $this->user;
  }

  public function setUser($user)
  {
    return $this->user = $user;
  }
	public function getTel()
                                                                              		{
                                                                              			return $this->tel;
                                                                              		}

	public function setTel($tel)
                                                                              		{
                                                                              			return $this->tel = $tel;
                                                                              		}
	public function getMail()
                                                                              		{
                                                                              			return $this->mail;
                                                                              		}

	public function setMail($mail)
                                                                              		{
                                                                              			return $this->mail = $mail;
                                                                              		}
	public function getAdaugat()
                                                                              		{
                                                                              			return $this->adaugat;
                                                                              		}

	public function setAdaugat($adaugat)
                                                                              		{
                                                                              			return $this->adaugat = $adaugat;
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

    /**
     * @return Collection|Orders[]
     */
    public function getOrders(): Collection
    {
        return $this->orders;
    }

    public function addOrder(Orders $order): self
    {
        if (!$this->orders->contains($order)) {
            $this->orders[] = $order;
            $order->setUser($this);
        }

        return $this;
    }

    public function removeOrder(Orders $order): self
    {
        if ($this->orders->removeElement($order)) {
            // set the owning side to null (unless already changed)
            if ($order->getUser() === $this) {
                $order->setUser(null);
            }
        }

        return $this;
    }





}