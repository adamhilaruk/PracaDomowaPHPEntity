<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="float")
     */
    private $weight;

    /**
     * @ORM\Column(type="boolean")
     */
    private $inStore;

    /**
     * @ORM\Column(type="date")
     */
    private $ExpirationDate;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    public function __construct()
    {
        $this->name = "Domyslny";
        $this->price = 3000;
        $this->weight =90.6;
        $this->inStore = false;
        $this->ExpirationDate = 1999-12-03;
        $this->description = "Fajny opis domyslny";
    }

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

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getInStore(): ?bool
    {
        return $this->inStore;
    }

    public function setInStore(bool $inStore): self
    {
        $this->inStore = $inStore;

        return $this;
    }

    public function getExpirationDate(): ?\DateTimeInterface
    {
        return $this->ExpirationDate;
    }

    public function setExpirationDate(\DateTimeInterface $ExpirationDate): self
    {
        $this->ExpirationDate = $ExpirationDate;

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
