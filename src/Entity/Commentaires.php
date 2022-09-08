<?php

namespace App\Entity;

use App\Repository\CommentairesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentairesRepository::class)]
class Commentaires
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $contenu = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\ManyToOne(inversedBy: 'commentaires')]
    private ?Users $createur = null;

    #[ORM\ManyToOne(inversedBy: 'commentaires')]
    private ?Publications $publication = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getCreateur(): ?Users
    {
        return $this->createur;
    }

    public function setCreateur(?Users $createur): self
    {
        $this->createur = $createur;

        return $this;
    }

    public function getPublication(): ?Publications
    {
        return $this->publication;
    }

    public function setPublication(?Publications $publication): self
    {
        $this->publication = $publication;

        return $this;
    }
}
