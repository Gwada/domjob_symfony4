<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ItemArborescenceRepository")
 */
class ItemArborescence
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $codeOgr;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $codeTypeRefentiel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $codePere;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $codeNoeud;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleItemArbo;

    /**
     * @ORM\Column(type="integer")
     */
    private $codeItemArboAssocie;

    /**
     * @ORM\Column(type="integer")
     */
    private $codeTypeNoeud;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleTypeNoeud;

    /**
     * @ORM\Column(type="integer")
     */
    private $statut;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeOgr(): ?int
    {
        return $this->codeOgr;
    }

    public function setCodeOgr(int $codeOgr): self
    {
        $this->codeOgr = $codeOgr;

        return $this;
    }

    public function getCodeTypeRefentiel(): ?int
    {
        return $this->codeTypeRefentiel;
    }

    public function setCodeTypeRefentiel(int $codeTypeRefentiel): self
    {
        $this->codeTypeRefentiel = $codeTypeRefentiel;

        return $this;
    }

    public function getCodePere(): ?string
    {
        return $this->codePere;
    }

    public function setCodePere(string $codePere): self
    {
        $this->codePere = $codePere;

        return $this;
    }

    public function getCodeNoeud(): ?string
    {
        return $this->codeNoeud;
    }

    public function setCodeNoeud(string $codeNoeud): self
    {
        $this->codeNoeud = $codeNoeud;

        return $this;
    }

    public function getLibelleItemArbo(): ?string
    {
        return $this->libelleItemArbo;
    }

    public function setLibelleItemArbo(string $libelleItemArbo): self
    {
        $this->libelleItemArbo = $libelleItemArbo;

        return $this;
    }

    public function getCodeItemArboAssocie(): ?int
    {
        return $this->codeItemArboAssocie;
    }

    public function setCodeItemArboAssocie(int $codeItemArboAssocie): self
    {
        $this->codeItemArboAssocie = $codeItemArboAssocie;

        return $this;
    }

    public function getCodeTypeNoeud(): ?int
    {
        return $this->codeTypeNoeud;
    }

    public function setCodeTypeNoeud(int $codeTypeNoeud): self
    {
        $this->codeTypeNoeud = $codeTypeNoeud;

        return $this;
    }

    public function getLibelleTypeNoeud(): ?string
    {
        return $this->libelleTypeNoeud;
    }

    public function setLibelleTypeNoeud(string $libelleTypeNoeud): self
    {
        $this->libelleTypeNoeud = $libelleTypeNoeud;

        return $this;
    }

    public function getStatut(): ?int
    {
        return $this->statut;
    }

    public function setStatut(int $statut): self
    {
        $this->statut = $statut;

        return $this;
    }
}
