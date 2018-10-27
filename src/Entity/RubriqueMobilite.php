<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RubriqueMobiliteRepository")
 */
class RubriqueMobilite
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
    private $CodeRome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $codeRomeCible;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $codeAppellationSource;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $codeAppellationCible;

    /**
     * @ORM\Column(type="integer")
     */
    private $codeTypeMobilite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleTypeMobilite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeRome(): ?string
    {
        return $this->CodeRome;
    }

    public function setCodeRome(string $CodeRome): self
    {
        $this->CodeRome = $CodeRome;

        return $this;
    }

    public function getCodeRomeCible(): ?string
    {
        return $this->codeRomeCible;
    }

    public function setCodeRomeCible(string $codeRomeCible): self
    {
        $this->codeRomeCible = $codeRomeCible;

        return $this;
    }

    public function getCodeAppellationSource(): ?string
    {
        return $this->codeAppellationSource;
    }

    public function setCodeAppellationSource(?string $codeAppellationSource): self
    {
        $this->codeAppellationSource = $codeAppellationSource;

        return $this;
    }

    public function getCodeAppellationCible(): ?string
    {
        return $this->codeAppellationCible;
    }

    public function setCodeAppellationCible(?string $codeAppellationCible): self
    {
        $this->codeAppellationCible = $codeAppellationCible;

        return $this;
    }

    public function getCodeTypeMobilite(): ?int
    {
        return $this->codeTypeMobilite;
    }

    public function setCodeTypeMobilite(int $codeTypeMobilite): self
    {
        $this->codeTypeMobilite = $codeTypeMobilite;

        return $this;
    }

    public function getLibelleTypeMobilite(): ?string
    {
        return $this->libelleTypeMobilite;
    }

    public function setLibelleTypeMobilite(string $libelleTypeMobilite): self
    {
        $this->libelleTypeMobilite = $libelleTypeMobilite;

        return $this;
    }
}
