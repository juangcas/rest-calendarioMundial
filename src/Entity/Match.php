<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GameRepository")
 */
class Match
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateHour;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $phase;

    /** 
     * @ORM\ManyToOne(targetEntity="Stadium")
     * @ORM\JoinColumn(name="stadium_id", referencedColumnName="id")
     */
    private $stadium;

    /** 
     * @ORM\ManyToOne(targetEntity="Selection") 
     * @ORM\JoinColumn(name="selection_a_id", referencedColumnName="id")
     */
    private $selA;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $goalsSelA;

    /** 
     * @ORM\ManyToOne(targetEntity="Selection") 
     * @ORM\JoinColumn(name="selection_b_id", referencedColumnName="id")
     */
    private $selB;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $goalsSelB;

    /**
     * @ORM\Column(type="text")
     */
    private $comments;

    /**
     * @ORM\Column(type="boolean")
     */
    private $edited;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $penalties;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $penSelA;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $penSelB;

    /**
     * @ORM\Column(type="string", length=7, nullable=true)
     */
    private $undefinedMatchKey;

    /**
     * @ORM\Column(type="string", length=3, nullable=true)
     */
    private $winnerKey;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idNextMatch;

    public function getId()
    {
        return $this->id;
    }

    public function getDateHour(): ?\DateTimeInterface
    {
        return $this->dateHour;
    }

    public function setDateHour(\DateTimeInterface $dateHour): self
    {
        $this->dateHour = $dateHour;

        return $this;
    }

    public function getPhase(): ?string
    {
        return $this->phase;
    }

    public function setPhase(string $phase): self
    {
        $this->phase = $phase;

        return $this;
    }

    public function getStadium(): ?Stadium
    {
        return $this->stadium;
    }

    public function setStadium(Stadium $stadium): self
    {
        $this->stadium = $stadium;

        return $this;
    }

    public function getSelA(): ?Selection
    {
        return $this->selA;
    }

    public function setSelA(Selection $selA): self
    {
        $this->selA = $selA;

        return $this;
    }

    public function getGoalsSelA(): ?int
    {
        return $this->goalsSelA;
    }

    public function setGoalsSelA(int $goalsSelA): self
    {
        $this->goalsSelA = $goalsSelA;

        return $this;
    }

    public function getSelB(): Selection
    {
        return $this->selB;
    }

    public function setSelB(Selection $selB): self
    {
        $this->selB = $selB;

        return $this;
    }

    public function getGoalsSelB(): ?int
    {
        return $this->goalsSelB;
    }

    public function setGoalsSelB(int $goalsSelB): self
    {
        $this->goalsSelB = $goalsSelB;

        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(string $comments): self
    {
        $this->comments = $comments;

        return $this;
    }

    public function getEdited(): ?bool
    {
        return $this->edited;
    }

    public function setEdited(bool $edited): self
    {
        $this->edited = $edited;

        return $this;
    }

    public function getPenalties(): ?bool
    {
        return $this->penalties;
    }

    public function setPenalties(?bool $penalties): self
    {
        $this->penalties = $penalties;

        return $this;
    }

    public function getPenSelA(): ?int
    {
        return $this->penSelA;
    }

    public function setPenSelA(?int $penSelA): self
    {
        $this->penSelA = $penSelA;

        return $this;
    }

    public function getPenSelB(): ?int
    {
        return $this->penSelB;
    }

    public function setPenSelB(?int $penSelB): self
    {
        $this->penSelB = $penSelB;

        return $this;
    }

    public function getUndefinedMatchKey(): ?string
    {
        return $this->undefinedMatchKey;
    }

    public function setUndefinedMatchKey(?string $undefinedMatchKey): self
    {
        $this->undefinedMatchKey = $undefinedMatchKey;

        return $this;
    }

    public function getWinnerKey(): ?string
    {
        return $this->winnerKey;
    }

    public function setWinnerKey(?string $winnerKey): self
    {
        $this->winnerKey = $winnerKey;

        return $this;
    }

    public function getIdNextMatch(): ?int
    {
        return $this->idNextMatch;
    }

    public function setIdNextMatch(?int $idNextMatch): self
    {
        $this->idNextMatch = $idNextMatch;

        return $this;
    }
}
