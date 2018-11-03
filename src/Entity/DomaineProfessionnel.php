<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DomaineProfessionnelRepository")
 */
class DomaineProfessionnel
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
    private $CodeDomaineProfessionnel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleDomaineProfessionnel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\GrandDomaine", inversedBy="domainesProfessionnel")
     */
    private $grandDomaine;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Advert", mappedBy="domaineProfessionel")
     */
    private $adverts;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ReferentielCodeRome", mappedBy="domaineProfessionel")
     */
    private $referentielCodeRomes;

    public function __construct()
    {
        $this->adverts = new ArrayCollection();
        $this->referentielCodeRomes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeDomaineProfessionnel(): ?string
    {
        return $this->CodeDomaineProfessionnel;
    }

    public function setCodeDomaineProfessionnel(string $CodeDomaineProfessionnel): self
    {
        $this->CodeDomaineProfessionnel = $CodeDomaineProfessionnel;

        return $this;
    }

    public function getLibelleDomaineProfessionnel(): ?string
    {
        return $this->libelleDomaineProfessionnel;
    }

    public function setLibelleDomaineProfessionnel(string $libelleDomaineProfessionnel): self
    {
        $this->libelleDomaineProfessionnel = $libelleDomaineProfessionnel;

        return $this;
    }

    public function getGrandDomaine(): ?GrandDomaine
    {
        return $this->grandDomaine;
    }

    public function setGrandDomaine(?GrandDomaine $grandDomaine): self
    {
        $this->grandDomaine = $grandDomaine;

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
            $advert->setDomaineProfessionel($this);
        }

        return $this;
    }

    public function removeAdvert(Advert $advert): self
    {
        if ($this->adverts->contains($advert)) {
            $this->adverts->removeElement($advert);
            // set the owning side to null (unless already changed)
            if ($advert->getDomaineProfessionel() === $this) {
                $advert->setDomaineProfessionel(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|ReferentielCodeRome[]
     */
    public function getReferentielCodeRomes(): Collection
    {
        return $this->referentielCodeRomes;
    }

    public function addReferentielCodeRome(ReferentielCodeRome $referentielCodeRome): self
    {
        if (!$this->referentielCodeRomes->contains($referentielCodeRome)) {
            $this->referentielCodeRomes[] = $referentielCodeRome;
            $referentielCodeRome->setDomaineProfessionel($this);
        }

        return $this;
    }

    public function removeReferentielCodeRome(ReferentielCodeRome $referentielCodeRome): self
    {
        if ($this->referentielCodeRomes->contains($referentielCodeRome)) {
            $this->referentielCodeRomes->removeElement($referentielCodeRome);
            // set the owning side to null (unless already changed)
            if ($referentielCodeRome->getDomaineProfessionel() === $this) {
                $referentielCodeRome->setDomaineProfessionel(null);
            }
        }

        return $this;
    }
}
