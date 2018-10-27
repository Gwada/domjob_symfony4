<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EnTeteRegroupementRepository")
 */
class EnTeteRegroupement
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
    private $codeTeteRgpmt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleEnTeteRegroupement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeTeteRgpmt(): ?int
    {
        return $this->codeTeteRgpmt;
    }

    public function setCodeTeteRgpmt(int $codeTeteRgpmt): self
    {
        $this->codeTeteRgpmt = $codeTeteRgpmt;

        return $this;
    }

    public function getLibelleEnTeteRegroupement(): ?string
    {
        return $this->libelleEnTeteRegroupement;
    }

    public function setLibelleEnTeteRegroupement(string $libelleEnTeteRegroupement): self
    {
        $this->libelleEnTeteRegroupement = $libelleEnTeteRegroupement;

        return $this;
    }
}
