<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TypeReferentielRepository")
 */
class TypeReferentiel
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
    private $codeTypeReferentiel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $codeTypeParticulier;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleTypeReferentiel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomTableCorrespArbre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomTableReferentiel;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCodeTypeParticulier(): ?string
    {
        return $this->codeTypeParticulier;
    }

    public function setCodeTypeParticulier(string $codeTypeParticulier): self
    {
        $this->codeTypeParticulier = $codeTypeParticulier;

        return $this;
    }

    public function getLibelleTypeReferentiel(): ?string
    {
        return $this->libelleTypeReferentiel;
    }

    public function setLibelleTypeReferentiel(string $libelleTypeReferentiel): self
    {
        $this->libelleTypeReferentiel = $libelleTypeReferentiel;

        return $this;
    }

    public function getNomTableCorrespArbre(): ?string
    {
        return $this->NomTableCorrespArbre;
    }

    public function setNomTableCorrespArbre(string $NomTableCorrespArbre): self
    {
        $this->NomTableCorrespArbre = $NomTableCorrespArbre;

        return $this;
    }

    public function getNomTableReferentiel(): ?string
    {
        return $this->nomTableReferentiel;
    }

    public function setNomTableReferentiel(string $nomTableReferentiel): self
    {
        $this->nomTableReferentiel = $nomTableReferentiel;

        return $this;
    }
}
