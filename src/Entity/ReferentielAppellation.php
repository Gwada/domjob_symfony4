<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ReferentielAppellationRepository")
 */
class ReferentielAppellation
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
    private $libelleAppellationLong;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleAppellationCourt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $codeRome;

    /**
     * @ORM\Column(type="integer")
     */
    private $codeTypeSectionAppellation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleTypeSectionAppellation;

    /**
     * @ORM\Column(type="integer")
     */
    private $statut;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Advert", mappedBy="referentielAppellation")
     */
    private $adverts;

    public function __construct()
    {
        $this->adverts = new ArrayCollection();
    }

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

    public function getLibelleAppellationLong(): ?string
    {
        return $this->libelleAppellationLong;
    }

    public function setLibelleAppellationLong(string $libelleAppellationLong): self
    {
        $this->libelleAppellationLong = $libelleAppellationLong;

        return $this;
    }

    public function getLibelleAppellationCourt(): ?string
    {
        return $this->libelleAppellationCourt;
    }

    public function setLibelleAppellationCourt(string $libelleAppellationCourt): self
    {
        $this->libelleAppellationCourt = $libelleAppellationCourt;

        return $this;
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

    public function getCodeTypeSectionAppellation(): ?int
    {
        return $this->codeTypeSectionAppellation;
    }

    public function setCodeTypeSectionAppellation(int $codeTypeSectionAppellation): self
    {
        $this->codeTypeSectionAppellation = $codeTypeSectionAppellation;

        return $this;
    }

    public function getLibelleTypeSectionAppellation(): ?string
    {
        return $this->libelleTypeSectionAppellation;
    }

    public function setLibelleTypeSectionAppellation(string $libelleTypeSectionAppellation): self
    {
        $this->libelleTypeSectionAppellation = $libelleTypeSectionAppellation;

        return $this;
    }

    public function getStatut(): ?int
    {
        return $this->statut;
    }

    public function setStatut(int $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * @return Collection|Advert[]
     */
    public function getAdverts(): Collection
    {
        return $this->adverts;
    }

    public function addAdvert(Advert $advert): self
    {
        if (!$this->adverts->contains($advert)) {
            $this->adverts[] = $advert;
            $advert->setReferentielAppellation($this);
        }

        return $this;
    }

    public function removeAdvert(Advert $advert): self
    {
        if ($this->adverts->contains($advert)) {
            $this->adverts->removeElement($advert);
            // set the owning side to null (unless already changed)
            if ($advert->getReferentielAppellation() === $this) {
                $advert->setReferentielAppellation(null);
            }
        }

        return $this;
    }
}
