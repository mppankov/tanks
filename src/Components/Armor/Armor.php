<?php

namespace mppankov\tanks\Components\Armor;

class Armor
{
    public int $armor;

    public function __construct(int $armor)
    {
        $this->armor = $armor;
    }

    public function toString(): string
    {
        return "Защита: {$this->armor}\n\n";
    }
}