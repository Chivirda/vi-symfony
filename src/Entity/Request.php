<?php

namespace App\Entity;

use App\DTO\RequestDTO;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RequestRepository")
 */

class Request
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="text", length=255)
     */
    private string $title;

    /**
     * @ORM\Column(type="text", length=10000)
     */
    private string $message;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private int $status = 0;

    /**
     * @ORM\Column(type="datetime")
     */
    private DateTime $createAt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="requests")
     * @ORM\JoinColumn(name="createdBy", referencedColumnName="id")
     */
    private UserInterface $createdBy;

    public function __construct(string $title, string $message)
    {
        $this->title = $title;
        $this->message = $message;
        $this->createAt = new DateTime();
    }

    public static function createFromDTO(RequestDTO $requestDTO): self
    {
        return new self($requestDTO->getTitle(), $requestDTO->getMessage());
    }

    public function updateFromDTO(RequestDTO $requestDTO)
    {
        $this->setTitle($requestDTO->getTitle());
        $this->setMessage($requestDTO->getMessage());
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function getCreateAt(): DateTime
    {
        return $this->createAt;
    }

    public function getCreatedBy(): string
    {
        return $this->createdBy->getUsername();
    }

    public function setCreatedBy(UserInterface $createdBy): void
    {
        $this->createdBy = $createdBy;
    }






}