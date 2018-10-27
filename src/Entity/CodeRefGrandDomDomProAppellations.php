<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CodeRefGrandDomDomProAppellationsRepository")
 */
class CodeRefGrandDomDomProAppellations
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
    private $codeGrandDomaine;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $codeDomaineProfessionnel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numeroFicheRome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $intitule;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleAppellationLong;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleAppellationCourt;

    /**
     * @ORM\Column(type="integer")
     */
    private $typeProvenance;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $codeFiche;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ogrRome;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ogrAppellation;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $priorisation;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCodeDomaineProfessionnel(): ?string
    {
        return $this->codeDomaineProfessionnel;
    }

    public function setCodeDomaineProfessionnel(?string $codeDomaineProfessionnel): self
    {
        $this->codeDomaineProfessionnel = $codeDomaineProfessionnel;

        return $this;
    }

    public function getNumeroFicheRome(): ?string
    {
        return $this->numeroFicheRome;
    }

    public function setNumeroFicheRome(?string $numeroFicheRome): self
    {
        $this->numeroFicheRome = $numeroFicheRome;

        return $this;
    }

    public function getIntitule(): ?string
    {
        return $this->intitule;
    }

    public function setIntitule(string $intitule): self
    {
        $this->intitule = $intitule;

        return $this;
    }

    public function getLibelleAppellationLong(): ?string
    {
        return $this->libelleAppellationLong;
    }

    public function setLibelleAppellationLong(string $libelleAppellationLong): self
    {
        $this->libelleAppellationLong = $libelleAppellationLong;

        return $this;
    }

    public function getLibelleAppellationCourt(): ?string
    {
        return $this->libelleAppellationCourt;
    }

    public function setLibelleAppellationCourt(string $libelleAppellationCourt): self
    {
        $this->libelleAppellationCourt = $libelleAppellationCourt;

        return $this;
    }

    public function getTypeProvenance(): ?int
    {
        return $this->typeProvenance;
    }

    public function setTypeProvenance(int $typeProvenance): self
    {
        $this->typeProvenance = $typeProvenance;

        return $this;
    }

    public function getCodeFiche(): ?int
    {
        return $this->codeFiche;
    }

    public function setCodeFiche(int $codeFiche): self
    {
        $this->codeFiche = $codeFiche;

        return $this;
    }

    public function getOgrRome(): ?int
    {
        return $this->ogrRome;
    }

    public function setOgrRome(int $ogrRome): self
    {
        $this->ogrRome = $ogrRome;

        return $this;
    }

    public function getOgrAppellation(): ?int
    {
        return $this->ogrAppellation;
    }

    public function setOgrAppellation(int $ogrAppellation): self
    {
        $this->ogrAppellation = $ogrAppellation;

        return $this;
    }

    public function getPriorisation(): ?int
    {
        return $this->priorisation;
    }

    public function setPriorisation(int $priorisation): self
    {
        $this->priorisation = $priorisation;

        return $this;
    }
}
