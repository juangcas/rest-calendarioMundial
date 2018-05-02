<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SelectionRepository")
 */
class Selection
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $initialPosition;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $grupo;

    /**
     * @ORM\Column(type="string", length=11)
     */
    private $country;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $finalPosition;

    /**
     * @ORM\Column(type="integer")
     */
    private $points;

    /**
     * @ORM\Column(type="integer")
     */
    private $playedGames;

    /**
     * @ORM\Column(type="integer")
     */
    private $wonGames;

    /**
     * @ORM\Column(type="integer")
     */
    private $tiedGames;

    /**
     * @ORM\Column(type="integer")
     */
    private $lostGames;

    /**
     * @ORM\Column(type="integer")
     */
    private $goalsFor;

    /**
     * @ORM\Column(type="integer")
     */
    private $goalsAgainst;

    /**
     * @ORM\Column(type="integer")
     */
    private $goalDifference;

    public function getId()
    {
        return $this->id;
    }

    public function getInitialPosition(): ?string
    {
        return $this->initialPosition;
    }

    public function setInitialPosition(string $initialPosition): self
    {
        $this->initialPosition = $initialPosition;

        return $this;
    }

    public function getGrupo(): ?string
    {
        return $this->grupo;
    }

    public function setGrupo(string $grupo): self
    {
        $this->grupo = $grupo;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getFinalPosition(): ?string
    {
        return $this->finalPosition;
    }

    public function setFinalPosition(string $finalPosition): self
    {
        $this->finalPosition = $finalPosition;

        return $this;
    }

    public function getPoints(): ?int
    {
        return $this->points;
    }

    public function setPoints(int $points): self
    {
        $this->points = $points;

        return $this;
    }

    public function getPlayedGames(): ?int
    {
        return $this->playedGames;
    }

    public function setPlayedGames(int $playedGames): self
    {
        $this->playedGames = $playedGames;

        return $this;
    }

    public function getWonGames(): ?int
    {
        return $this->wonGames;
    }

    public function setWonGames(int $wonGames): self
    {
        $this->wonGames = $wonGames;

        return $this;
    }

    public function getTiedGames(): ?int
    {
        return $this->tiedGames;
    }

    public function setTiedGames(int $tiedGames): self
    {
        $this->tiedGames = $tiedGames;

        return $this;
    }

    public function getLostGames(): ?int
    {
        return $this->lostGames;
    }

    public function setLostGames(int $lostGames): self
    {
        $this->lostGames = $lostGames;

        return $this;
    }

    public function getGoalsFor(): ?int
    {
        return $this->goalsFor;
    }

    public function setGoalsFor(int $goalsFor): self
    {
        $this->goalsFor = $goalsFor;

        return $this;
    }

    public function getGoalsAgainst(): ?int
    {
        return $this->goalsAgainst;
    }

    public function setGoalsAgainst(int $goalsAgainst): self
    {
        $this->goalsAgainst = $goalsAgainst;

        return $this;
    }

    public function getGoalDifference(): ?int
    {
        return $this->goalDifference;
    }

    public function setGoalDifference(int $goalDifference): self
    {
        $this->goalDifference = $goalDifference;

        return $this;
    }
}
