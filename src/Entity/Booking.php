<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use DateTime;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BookingRepository")
 */
class Booking
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @ORM\Id
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $beginAt;

    /**
     * @ORM\Column(type="time")
     */
    private $beginAtHour;


    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $endAt = null;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $endAtHour;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBeginAt(): ?\DateTimeInterface
    {
        return $this->beginAt;
    }

    public function setBeginAt(\DateTimeInterface $beginAt): self
    {
        $this->beginAt = $beginAt;

        return $this;
    }

    public function getBeginAtHour(): ?\DateTimeInterface
    {
        return $this->beginAtHour;
    }

    public function setBeginAtHour(\DateTimeInterface $beginAtHour): self
    {
        $this->beginAtHour = $beginAtHour;

        return $this;
    }

    public function getEndAt(): ?\DateTimeInterface
    {
        return $this->endAt;
    }

    public function setEndAt(?\DateTimeInterface $endAt = null): self
    {
        $this->endAt = $endAt;

        return $this;
    }

    public function getEndAtHour(): ?\DateTimeInterface
    {
        return $this->endAtHour;
    }

    public function setEndAtHour(\DateTimeInterface $endAtHour = null): self
    {
        $this->endAtHour = $endAtHour;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}