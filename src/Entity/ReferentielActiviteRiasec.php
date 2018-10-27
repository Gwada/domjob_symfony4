<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReferentielActiviteRiasecRepository")
 */
class ReferentielActiviteRiasec
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
    private $riasecMajeur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $riasecMineur;

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

    public function getRiasecMajeur(): ?string
    {
        return $this->riasecMajeur;
    }

    public function setRiasecMajeur(string $riasecMajeur): self
    {
        $this->riasecMajeur = $riasecMajeur;

        return $this;
    }

    public function getRiasecMineur(): ?string
    {
        return $this->riasecMineur;
    }

    public function setRiasecMineur(string $riasecMineur): self
    {
        $this->riasecMineur = $riasecMineur;

        return $this;
    }
}
