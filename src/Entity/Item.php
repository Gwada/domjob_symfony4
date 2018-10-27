<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ItemRepository")
 */
class Item
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
    private $libelle;

    /**
     * @ORM\Column(type="integer")
     */
    private $codeTypeReferentiel;

    /**
     * @ORM\Column(type="integer")
     */
    private $codeRefRubrique;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $codeTeteRgpmt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleActiviteImpression;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleEnTeteRegroupement;

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

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

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

    public function getCodeRefRubrique(): ?int
    {
        return $this->codeRefRubrique;
    }

    public function setCodeRefRubrique(int $codeRefRubrique): self
    {
        $this->codeRefRubrique = $codeRefRubrique;

        return $this;
    }

    public function getCodeTeteRgpmt(): ?string
    {
        return $this->codeTeteRgpmt;
    }

    public function setCodeTeteRgpmt(string $codeTeteRgpmt): self
    {
        $this->codeTeteRgpmt = $codeTeteRgpmt;

        return $this;
    }

    public function getLibelleActiviteImpression(): ?string
    {
        return $this->libelleActiviteImpression;
    }

    public function setLibelleActiviteImpression(string $libelleActiviteImpression): self
    {
        $this->libelleActiviteImpression = $libelleActiviteImpression;

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
