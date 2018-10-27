<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReferentielCodeRomeRiasecRepository")
 */
class ReferentielCodeRomeRiasec
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
    private $riasecMajeur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $riasecMineur;

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
