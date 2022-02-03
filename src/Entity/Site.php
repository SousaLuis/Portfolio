<?php

namespace App\Entity;

use App\Repository\SiteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SiteRepository::class)]
class Site
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $url_site;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $url_github;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $urlImage;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrlSite(): ?string
    {
        return $this->url_site;
    }

    public function setUrlSite(?string $url_site): self
    {
        $this->url_site = $url_site;

        return $this;
    }

    public function getUrlGithub(): ?string
    {
        return $this->url_github;
    }

    public function setUrlGithub(?string $url_github): self
    {
        $this->url_github = $url_github;

        return $this;
    }

    public function getUrlImage(): ?string
    {
        return $this->urlImage;
    }

    public function setUrlImage(?string $urlImage): self
    {
        $this->urlImage = $urlImage;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

}
