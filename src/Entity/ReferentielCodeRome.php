<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReferentielCodeRomeRepository")
 */
class ReferentielCodeRome
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
    private $codeFicheEm;

    /**
     * @ORM\Column(type="integer")
     */
    private $codeOgr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleRome;

    /**
     * @ORM\Column(type="integer")
     */
    private $statut;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\DomaineProfessionnel", inversedBy="referentielCodeRomes")
     */
    private $domaineProfessionel;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Advert", mappedBy="referentielCodeRome")
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

    public function getCodeRome(): ?string
    {
        return $this->codeRome;
    }

    public function setCodeRome(string $codeRome): self
    {
        $this->codeRome = $codeRome;

        return $this;
    }

    public function getCodeFicheEm(): ?int
    {
        return $this->codeFicheEm;
    }

    public function setCodeFicheEm(int $codeFicheEm): self
    {
        $this->codeFicheEm = $codeFicheEm;

        return $this;
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

    public function getLibelleRome(): ?string
    {
        return $this->libelleRome;
    }

    public function setLibelleRome(string $libelleRome): self
    {
        $this->libelleRome = $libelleRome;

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

    public function getDomaineProfessionel(): ?DomaineProfessionnel
    {
        return $this->domaineProfessionel;
    }

    public function setDomaineProfessionel(?DomaineProfessionnel $domaineProfessionel): self
    {
        $this->domaineProfessionel = $domaineProfessionel;

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
            $advert->setReferentielCodeRome($this);
        }

        return $this;
    }

    public function removeAdvert(Advert $advert): self
    {
        if ($this->adverts->contains($advert)) {
            $this->adverts->removeElement($advert);
            // set the owning side to null (unless already changed)
            if ($advert->getReferentielCodeRome() === $this) {
                $advert->setReferentielCodeRome(null);
            }
        }

        return $this;
    }
}
