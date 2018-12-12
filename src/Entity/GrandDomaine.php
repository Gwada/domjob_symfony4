<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\GrandDomaineRepository")
 */
class GrandDomaine
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
     * @ORM\Column(type="string", length=255)
     */
    private $libelleGrandDomaine;

    public function __construct()
    {
    }

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

    public function getLibelleGrandDomaine(): ?string
    {
        return $this->libelleGrandDomaine;
    }

    public function setLibelleGrandDomaine(string $libelleGrandDomaine): self
    {
        $this->libelleGrandDomaine = $libelleGrandDomaine;

        return $this;
    }
}
