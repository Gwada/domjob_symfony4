<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\DomJob4CompositionBlocRepository")
 */
class CompositionBloc
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
    private $codeCompoBloc;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleBloc;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeReferentiel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeCompoBloc(): ?int
    {
        return $this->codeCompoBloc;
    }

    public function setCodeCompoBloc(int $codeCompoBloc): self
    {
        $this->codeCompoBloc = $codeCompoBloc;

        return $this;
    }

    public function getLibelleBloc(): ?string
    {
        return $this->libelleBloc;
    }

    public function setLibelleBloc(string $libelleBloc): self
    {
        $this->libelleBloc = $libelleBloc;

        return $this;
    }

    public function getTypeReferentiel(): ?string
    {
        return $this->typeReferentiel;
    }

    public function setTypeReferentiel(string $typeReferentiel): self
    {
        $this->typeReferentiel = $typeReferentiel;

        return $this;
    }
}
