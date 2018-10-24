<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DomaineProfessionnelRepository")
 */
class DomaineProfessionnel
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
    private $CodeDomaineProfessionnel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleDomaineProfessionnel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\GrandDomaine", inversedBy="domainesProfessionnel")
     */
    private $grandDomaine;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeDomaineProfessionnel(): ?string
    {
        return $this->CodeDomaineProfessionnel;
    }

    public function setCodeDomaineProfessionnel(string $CodeDomaineProfessionnel): self
    {
        $this->CodeDomaineProfessionnel = $CodeDomaineProfessionnel;

        return $this;
    }

    public function getLibelleDomaineProfessionnel(): ?string
    {
        return $this->libelleDomaineProfessionnel;
    }

    public function setLibelleDomaineProfessionnel(string $libelleDomaineProfessionnel): self
    {
        $this->libelleDomaineProfessionnel = $libelleDomaineProfessionnel;

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
}
