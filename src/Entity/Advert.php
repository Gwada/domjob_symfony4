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
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=6, max=32)
     */
    private $author;

    /**
     * @ORM\Column(type="text")
     * @Assert\Length(min=10)
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\GrandDomaine", inversedBy="adverts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $grandDomaine;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\DomaineProfessionnel", inversedBy="adverts")
     */
    private $domaineProfessionel;

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

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

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

    public function getGrandDomaine(): ?GrandDomaine
    {
        return $this->grandDomaine;
    }

    public function setGrandDomaine(?GrandDomaine $grandDomaine): self
    {
        $this->grandDomaine = $grandDomaine;

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

    public function getDomaineProfessionel(): ?DomaineProfessionnel
    {
        return $this->domaineProfessionel;
    }

    public function setDomaineProfessionel(?DomaineProfessionnel $domaineProfessionel): self
    {
        $this->domaineProfessionel = $domaineProfessionel;

        return $this;
    }
}
