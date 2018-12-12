<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\TexteRepository")
 */
class Texte
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
     * @ORM\Column(type="integer")
     */
    private $positionLibelleTxt;

    /**
     * @ORM\Column(type="integer")
     */
    private $codeTypeTexte;

    /**
     * @ORM\Column(type="text")
     */
    private $libelleTexte;

    /**
     * @ORM\Column(type="text")
     */
    private $libelleTypeTexte;

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

    public function getPositionLibelleTxt(): ?int
    {
        return $this->positionLibelleTxt;
    }

    public function setPositionLibelleTxt(int $positionLibelleTxt): self
    {
        $this->positionLibelleTxt = $positionLibelleTxt;

        return $this;
    }

    public function getCodeTypeTexte(): ?int
    {
        return $this->codeTypeTexte;
    }

    public function setCodeTypeTexte(int $codeTypeTexte): self
    {
        $this->codeTypeTexte = $codeTypeTexte;

        return $this;
    }

    public function getLibelleTexte(): ?string
    {
        return $this->libelleTexte;
    }

    public function setLibelleTexte(string $libelleTexte): self
    {
        $this->libelleTexte = $libelleTexte;

        return $this;
    }

    public function getLibelleTypeTexte(): ?string
    {
        return $this->libelleTypeTexte;
    }

    public function setLibelleTypeTexte(string $libelleTypeTexte): self
    {
        $this->libelleTypeTexte = $libelleTypeTexte;

        return $this;
    }
}
