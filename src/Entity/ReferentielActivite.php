<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ReferentielActiviteRepository")
 */
class ReferentielActivite
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
     * @ORM\Column(type="string", length=255)
     */
    private $codeTeteRgpmt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleActivite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleActiviteImpression;

    /**
     * @ORM\Column(type="integer")
     */
    private $codeTypeActivite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleTypeActivite;

    /**
     * @ORM\Column(type="integer")
     */
    private $codeTypeItemActivite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleTypeItemActivite;

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

    public function getCodeTeteRgpmt(): ?string
    {
        return $this->codeTeteRgpmt;
    }

    public function setCodeTeteRgpmt(string $codeTeteRgpmt): self
    {
        $this->codeTeteRgpmt = $codeTeteRgpmt;

        return $this;
    }

    public function getLibelleActivite(): ?string
    {
        return $this->libelleActivite;
    }

    public function setLibelleActivite(string $libelleActivite): self
    {
        $this->libelleActivite = $libelleActivite;

        return $this;
    }

    public function getLibelleActiviteImpression(): ?string
    {
        return $this->libelleActiviteImpression;
    }

    public function setLibelleActiviteImpression(string $libelleActiviteImpression): self
    {
        $this->libelleActiviteImpression = $libelleActiviteImpression;

        return $this;
    }

    public function getCodeTypeActivite(): ?int
    {
        return $this->codeTypeActivite;
    }

    public function setCodeTypeActivite(int $codeTypeActivite): self
    {
        $this->codeTypeActivite = $codeTypeActivite;

        return $this;
    }

    public function getLibelleTypeActivite(): ?string
    {
        return $this->libelleTypeActivite;
    }

    public function setLibelleTypeActivite(string $libelleTypeActivite): self
    {
        $this->libelleTypeActivite = $libelleTypeActivite;

        return $this;
    }

    public function getCodeTypeItemActivite(): ?int
    {
        return $this->codeTypeItemActivite;
    }

    public function setCodeTypeItemActivite(int $codeTypeItemActivite): self
    {
        $this->codeTypeItemActivite = $codeTypeItemActivite;

        return $this;
    }

    public function getLibelleTypeItemActivite(): ?string
    {
        return $this->libelleTypeItemActivite;
    }

    public function setLibelleTypeItemActivite(string $libelleTypeItemActivite): self
    {
        $this->libelleTypeItemActivite = $libelleTypeItemActivite;

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
