<?php

namespace App\Models;

use Framework\Core\Model;

class Game extends Model
{

    protected ?int $id = null;
    protected ?string $name = null;
    protected ?string $platform = null;
    protected ?int $max_players = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    public function setPlatform(?string $platform): void
    {
        $this->platform = $platform;
    }

    public function getMaxPlayers(): ?int
    {
        return $this->max_players;
    }
    
    public function setMaxPlayers(?int $max_players): void
    {
        $this->max_players = $max_players;
    }
}
