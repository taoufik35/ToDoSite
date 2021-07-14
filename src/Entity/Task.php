<?php

namespace App\Entity;

use App\Repository\TaskRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TaskRepository::class)
 */
class Task
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nameTask;

    /**
     * @ORM\Column(type="text")
     */
    private $summaryTask;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateTask;

    /**
     * @ORM\Column(type="datetime")
     */
    private $deadlineTask;

    /**
     * @ORM\Column(type="integer")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity=Project::class, inversedBy="tasks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $project;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameTask(): ?string
    {
        return $this->nameTask;
    }

    public function setNameTask(string $nameTask): self
    {
        $this->nameTask = $nameTask;

        return $this;
    }

    public function getSummaryTask(): ?string
    {
        return $this->summaryTask;
    }

    public function setSummaryTask(string $summaryTask): self
    {
        $this->summaryTask = $summaryTask;

        return $this;
    }

    public function getDateTask(): ?\DateTimeInterface
    {
        return $this->dateTask;
    }

    public function setDateTask(\DateTimeInterface $dateTask): self
    {
        $this->dateTask = $dateTask;

        return $this;
    }

    public function getDeadlineTask(): ?\DateTimeInterface
    {
        return $this->deadlineTask;
    }

    public function setDeadlineTask(\DateTimeInterface $deadlineTask): self
    {
        $this->deadlineTask = $deadlineTask;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getProject(): ?Project
    {
        return $this->project;
    }

    public function setProject(?Project $project): self
    {
        $this->project = $project;

        return $this;
    }
}
