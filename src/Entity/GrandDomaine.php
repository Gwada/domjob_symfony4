<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
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

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\DomaineProfessionnel", mappedBy="grandDomaine")
     */
    private $domainesProfessionnel;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Advert", mappedBy="grandDomaine")
     */
    private $adverts;

    public function __construct()
    {
        $this->domainesProfessionnel = new ArrayCollection();
        $this->adverts = new ArrayCollection();
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

    /**
     * @return Collection|DomaineProfessionnel[]
     */
    public function getDomainesProfessionnel(): Collection
    {
        return $this->domainesProfessionnel;
    }

    public function addDomainesProfessionnel(DomaineProfessionnel $domainesProfessionnel): self
    {
        if (!$this->domainesProfessionnel->contains($domainesProfessionnel)) {
            $this->domainesProfessionnel[] = $domainesProfessionnel;
            $domainesProfessionnel->setGrandDomaine($this);
        }

        return $this;
    }

    public function removeDomainesProfessionnel(DomaineProfessionnel $domainesProfessionnel): self
    {
        if ($this->domainesProfessionnel->contains($domainesProfessionnel)) {
            $this->domainesProfessionnel->removeElement($domainesProfessionnel);
            // set the owning side to null (unless already changed)
            if ($domainesProfessionnel->getGrandDomaine() === $this) {
                $domainesProfessionnel->setGrandDomaine(null);
            }
        }

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
            $advert->setGrandDomaine($this);
        }

        return $this;
    }

    public function removeAdvert(Advert $advert): self
    {
        if ($this->adverts->contains($advert)) {
            $this->adverts->removeElement($advert);
            // set the owning side to null (unless already changed)
            if ($advert->getGrandDomaine() === $this) {
                $advert->setGrandDomaine(null);
            }
        }

        return $this;
    }
}
