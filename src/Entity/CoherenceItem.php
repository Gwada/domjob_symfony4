<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CoherenceItemRepository")
 */
class CoherenceItem
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
    private $codeOgr;

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

    public function getCodeOgr(): ?string
    {
        return $this->codeOgr;
    }

    public function setCodeOgr(string $codeOgr): self
    {
        $this->codeOgr = $codeOgr;

        return $this;
    }
}
