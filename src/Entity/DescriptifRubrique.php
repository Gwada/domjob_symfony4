<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\DescriptifRubriqueRepository")
 */
class DescriptifRubrique
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
    private $codeRefRubrique;

    /**
     * @ORM\Column(type="integer")
     */
    private $codeTypeReferentiel;

    /**
     * @ORM\Column(type="integer")
     */
    private $codeCompoBloc;

    /**
     * @ORM\Column(type="integer")
     */
    private $positionBloc;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleRefRubrique;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeRefRubrique(): ?int
    {
        return $this->codeRefRubrique;
    }

    public function setCodeRefRubrique(int $codeRefRubrique): self
    {
        $this->codeRefRubrique = $codeRefRubrique;

        return $this;
    }

    public function getCodeTypeReferentiel(): ?int
    {
        return $this->codeTypeReferentiel;
    }

    public function setCodeTypeReferentiel(int $codeTypeReferentiel): self
    {
        $this->codeTypeReferentiel = $codeTypeReferentiel;

        return $this;
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

    public function getPositionBloc(): ?int
    {
        return $this->positionBloc;
    }

    public function setPositionBloc(int $positionBloc): self
    {
        $this->positionBloc = $positionBloc;

        return $this;
    }

    public function getLibelleRefRubrique(): ?string
    {
        return $this->libelleRefRubrique;
    }

    public function setLibelleRefRubrique(string $libelleRefRubrique): self
    {
        $this->libelleRefRubrique = $libelleRefRubrique;

        return $this;
    }
}
