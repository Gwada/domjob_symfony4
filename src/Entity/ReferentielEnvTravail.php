<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ReferentielEnvTravailRepository")
 */
class ReferentielEnvTravail
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
    private $libelleEnvTravail;

    /**
     * @ORM\Column(type="integer")
     */
    private $codeTypeSectionEnvTrav;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleTypeSectionEnvTrav;

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

    public function getLibelleEnvTravail(): ?string
    {
        return $this->libelleEnvTravail;
    }

    public function setLibelleEnvTravail(string $libelleEnvTravail): self
    {
        $this->libelleEnvTravail = $libelleEnvTravail;

        return $this;
    }

    public function getCodeTypeSectionEnvTrav(): ?int
    {
        return $this->codeTypeSectionEnvTrav;
    }

    public function setCodeTypeSectionEnvTrav(int $codeTypeSectionEnvTrav): self
    {
        $this->codeTypeSectionEnvTrav = $codeTypeSectionEnvTrav;

        return $this;
    }

    public function getLibelleTypeSectionEnvTrav(): ?string
    {
        return $this->libelleTypeSectionEnvTrav;
    }

    public function setLibelleTypeSectionEnvTrav(string $libelleTypeSectionEnvTrav): self
    {
        $this->libelleTypeSectionEnvTrav = $libelleTypeSectionEnvTrav;

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
