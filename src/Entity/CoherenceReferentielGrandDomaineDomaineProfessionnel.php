<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CoherenceReferentielGrandDomaineDomaineProfessionnelRepository")
 */
class CoherenceReferentielGrandDomaineDomaineProfessionnel
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
    private $codeRome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleRome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $codeGrandDomaine;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleGrandDomaine;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $codeDomaineProfessionnel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleDomaineProfessionnel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeRome(): ?string
    {
        return $this->codeRome;
    }

    public function setCodeRome(string $codeRome): self
    {
        $this->codeRome = $codeRome;

        return $this;
    }

    public function getLibelleRome(): ?string
    {
        return $this->libelleRome;
    }

    public function setLibelleRome(string $libelleRome): self
    {
        $this->libelleRome = $libelleRome;

        return $this;
    }

    public function getCodeGrandDomaine(): ?string
    {
        return $this->codeGrandDomaine;
    }

    public function setCodeGrandDomaine(string $codeGrandDomaine): self
    {
        $this->codeGrandDomaine = $codeGrandDomaine;

        return $this;
    }

    public function getLibelleGrandDomaine(): ?string
    {
        return $this->libelleGrandDomaine;
    }

    public function setLibelleGrandDomaine(string $libelleGrandDomaine): self
    {
        $this->libelleGrandDomaine = $libelleGrandDomaine;

        return $this;
    }

    public function getCodeDomaineProfessionnel(): ?string
    {
        return $this->codeDomaineProfessionnel;
    }

    public function setCodeDomaineProfessionnel(string $codeDomaineProfessionnel): self
    {
        $this->codeDomaineProfessionnel = $codeDomaineProfessionnel;

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
}
