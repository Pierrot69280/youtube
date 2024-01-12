<?php

namespace App\Entity;


use App\Repository\YoutubeRepository;
use Core\Attributes\Table;
use Core\Attributes\TargetRepository;

#[Table(name: "youtube")]
#[TargetRepository(name: YoutubeRepository::class)]

class Youtube
{
    private int $id;
    private string $name;
    private string $description;
    private int $follower;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getFollower(): int
    {
        return $this->follower;
    }

    public function setFollower(int $follower): void
    {
        $this->follower = $follower;
    }


}