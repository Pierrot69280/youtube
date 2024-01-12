<?php

namespace App\Repository;

use App\Entity\Youtube;
use Core\Attributes\TargetEntity;
use Core\Repository\Repository;


#[TargetEntity(name: Youtube::class)]
class YoutubeRepository extends Repository
{

    public function save(Youtube $youtube)
    {
        $query = $this->pdo->prepare("INSERT INTO $this->tableName SET name = :name, description = :description, follower	= :follower");

        $query->execute([
            "name"=>$youtube->getName(),
            "description"=>$youtube->getDescription(),
            "follower"=>$youtube->getFollower()
        ]);
    }
}