<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdvertRepository")
 */
class Advert
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=10, max=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     * @Assert\Length(min=10)
     */
    private $content;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="adverts")
     */
    private $user;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $grossSalaryPerHour;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $hourPerWeek;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\City", inversedBy="adverts")
     */
    private $city;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ReferentielAppellation", inversedBy="adverts")
     */
    private $referentielAppellation;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getGrossSalaryPerHour(): ?int
    {
        return $this->grossSalaryPerHour;
    }

    public function setGrossSalaryPerHour(?int $grossSalaryPerHour): self
    {
        $this->grossSalaryPerHour = $grossSalaryPerHour;

        return $this;
    }

    public function getHourPerWeek(): ?int
    {
        return $this->hourPerWeek;
    }

    public function setHourPerWeek(?int $hourPerWeek): self
    {
        $this->hourPerWeek = $hourPerWeek;

        return $this;
    }

    public function getCity(): ?City
    {
        return $this->city;
    }

    public function setCity(?City $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getReferentielAppellation(): ?ReferentielAppellation
    {
        return $this->referentielAppellation;
    }

    public function setReferentielAppellation(?ReferentielAppellation $referentielAppellation): self
    {
        $this->referentielAppellation = $referentielAppellation;

        return $this;
    }
}
