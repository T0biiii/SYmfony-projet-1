<?php

namespace App\Entity;

use App\Repository\CouleurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CouleurRepository::class)]
class Couleur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $taille = null;

    #[ORM\OneToMany(mappedBy: 'couleur', targetEntity: Article::class)]
    private Collection $category;

    public function __construct()
    {
        $this->category = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(string $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * @return Collection<int, Article>
     */
    public function getCategory(): Collection
    {
        return $this->category;
    }

    public function addCategory(Article $category): self
    {
        if (!$this->category->contains($category)) {
            $this->category->add($category);
            $category->setCouleur($this);
        }

        return $this;
    }

    public function removeCategory(Article $category): self
    {
        if ($this->category->removeElement($category)) {
            // set the owning side to null (unless already changed)
            if ($category->getCouleur() === $this) {
                $category->setCouleur(null);
            }
        }

        return $this;
    }
}
