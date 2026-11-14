<?php

namespace App\Models;

use Framework\Core\Model;

class Event extends Model
{
    protected ?int $id = null;
    protected ?string $title = null;
    protected ?string $type = null;
    protected ?string $event_date = null;
    protected ?string $location = null;
    protected ?string $description = null;
    protected ?int $game_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getEventDate(): ?string
    {
        return $this->event_date;
    }

    public function setEventDate(string $event_date): void
    {
        $this->event_date = $event_date;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): void
    {
        $this->location = $location;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getGameId(): ?int
    {
        return $this->game_id;
    }

    public function setGameId(?int $game_id): void
    {
        $this->game_id = $game_id;
    }
}
