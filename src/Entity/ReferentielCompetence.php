<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReferentielCompetenceRepository")
 */
class ReferentielCompetence
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
    private $libelleCompetence;

    /**
     * @ORM\Column(type="integer")
     */
    private $codeTypeCompetence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleTypeCompetence;

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

    public function getLibelleCompetence(): ?string
    {
        return $this->libelleCompetence;
    }

    public function setLibelleCompetence(string $libelleCompetence): self
    {
        $this->libelleCompetence = $libelleCompetence;

        return $this;
    }

    public function getCodeTypeCompetence(): ?int
    {
        return $this->codeTypeCompetence;
    }

    public function setCodeTypeCompetence(int $codeTypeCompetence): self
    {
        $this->codeTypeCompetence = $codeTypeCompetence;

        return $this;
    }

    public function getLibelleTypeCompetence(): ?string
    {
        return $this->libelleTypeCompetence;
    }

    public function setLibelleTypeCompetence(string $libelleTypeCompetence): self
    {
        $this->libelleTypeCompetence = $libelleTypeCompetence;

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
