<?php

namespace App\Models;

class Category
{
    public function __construct(
        private int $id,
        private string $name,
        private ?string $createdAt = null,
        private ?string $updatedAt = null,
    ) {
    }

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function createdAt(): string
    {
        return $this->createdAt;
    }

    public function updatedAt(): string
    {
        return $this->updatedAt;
    }
}